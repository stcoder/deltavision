<?php
$this->loadFragment('headerstart');
?>
    <div class="smartslider-button smartslider-save" onclick="setTimeout(function(){njQuery('#smartslider-form').submit();}, 300);"><?php echo NextendText::_('Generate'); ?></div>
    <div class="smartslider-button smartslider-cancel" onclick="window.nextendsave=true;location.href='<?php echo $this->route('controller=sliders&view=sliders_slider&action=create'); ?>';"><?php echo NextendText::_('Cancel'); ?></div>
<?php
$this->loadFragment('headerend');
?>

<?php
$this->loadFragment('firstcolstart');
?>

<?php
$this->loadFragment('firstcolend');
?>

<?php
$this->loadFragment('secondcolstart');
?>

<?php
    $css = NextendCss::getInstance();
    $css->addCssFile(NEXTEND_SMART_SLIDER2_ASSETS . 'admin/css/createquick.css');          
    
    $js = NextendJavascript::getInstance();
    $js->addLibraryJsLibraryFile('jquery', 'ui/jquery.ui.core.min.js');
    $js->addLibraryJsLibraryFile('jquery', 'ui/jquery.ui.widget.min.js');
    $js->addLibraryJsLibraryFile('jquery', 'ui/jquery.ui.mouse.min.js');
    $js->addLibraryJsLibraryFile('jquery', 'ui/jquery.ui.sortable.min.js');
?>

<form id="smartslider-form" action="" method="post">
    <?php
    NextendForm::tokenize();
    $slidersModel = $this->getModel('sliders');
    $form = $slidersModel->renderQuickAddForm();
    ?>
    <input name="save" value="1" type="hidden" />
</form>
<h2>Selected images</h2>
<div id="selected-images-container" class="blue-container">
    <?php 
    if(nextendIsWordpress()){
        add_filter('media_view_strings', 'custom_media_uploader_tabs', 5);
        function custom_media_uploader_tabs( $strings ) {
            $strings['insertMediaTitle'] = "Image";
            $strings['insertIntoPost'] = "Add to slider";
            // remove options
            if (isset($strings['createGalleryTitle'])) unset($strings['createGalleryTitle']);
            if (isset($strings['insertFromUrlTitle'])) unset($strings['insertFromUrlTitle']);
            return $strings;
        }
        
            wp_enqueue_style('editor');
        if(function_exists( 'wp_enqueue_media' )){
            wp_enqueue_media();
        }else{
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
        }
    ?>
    <a title="Add Image" data-editor="content" class="button add-image" href="#">
        <span class="wp-media-buttons-icon"></span> Add Image
    </a>
    <div style="clear: both;"></div>
    <?php
    }
    ?>
    <div id="delete-image"></div>
    <ul id="selected-images"></ul>
    <div style="clear: both;"></div>
</div>

<?php if(nextendIsJoomla()): 
		$app = JFactory::getApplication();
		$user = JFactory::getUser();
		$extension = $app->input->get('option');
		
    $link = 'index.php?option=com_media&amp;view=images&amp;tmpl=component&amp;e_name=&amp;asset=' . $extension . '&amp;author=' . $user->id;
?>
<h2>Choose images</h2>
<div class="blue-container">
    <iframe frameborder="0" src="<?php echo $link; ?>" id="image-chooser" width="100%" height="0"></iframe>
</div>
    <?php elseif(nextendIsMagento()): ?>
    
    <?php endif; ?>
<script>
njQuery(window).ready(function(){
    var $ = njQuery,
        images = $('#selected-images'),
        deleteimage = $('#delete-image'),
        form = $('#smartslider-form');
    
    function addImageToList(img){
        $('<li><img src="'+img+'" /></li>').appendTo(images);
        images.sortable( "refresh" );
        $(window).trigger('resize');
    }
    
    <?php if(nextendIsJoomla()): ?>
    var folder = "<?php echo NextendUri::pathToUri(JPATH_ROOT . '/' . JComponentHelper::getParams('com_media')->get('image_path', 'images'). '/')?>",
        iframe = $('#image-chooser'),
        frame = $('#image-chooser');
    
    frame.on('load', function(){
        frame = $(this.contentWindow.document);
        frame.find('#imageframe').next('.well').remove();
        frame.find('#imageframe').next('fieldset').remove();
        frame.find('#imageframe').prev('fieldset').find('.fltrt').remove();
        frame.find('#imageForm').find('.pull-right').remove();
        frame.find('#upbutton').css('verticalAlign', 'top');
        this.contentWindow.ImageManager.populateFields = function(file){
            addImageToList(folder+file);
        }
        frame.find('#system-message-container').css('paddingTop', '15px');
        frame.find('body').css('overflow', 'hidden').css('padding', '0 15px');
        iframe.css('height', frame.find('html').prop('scrollHeight'));
        $(window).trigger('resize');
    });
    <?php elseif(nextendIsWordpress()): ?>
    		var file_frame;
    		
    		jQuery('#smartslider-admin .add-image').on('click', function(event){
    			event.preventDefault();
    
    			// If the media frame already exists, reopen it.
    			if ( file_frame ) {
    				file_frame.open();
    				return;
    			}
    
    			// Create the media frame.
    			file_frame = wp.media.frames.file_frame = wp.media({
    				multiple: 'add',
    				frame: 'post',
    				library: {type: 'image'}
    			});
    
    			// When an image is selected, run a callback.
                  console.log(file_frame);
    			file_frame.on('insert', function() {
              console.log('asd');
      				var selection = file_frame.state().get('selection');
      				var slide_ids = [];
      
      				selection.map(function(attachment) {
        					attachment = attachment.toJSON();
                  addImageToList(attachment.url);
      				});
    			});
    
    			file_frame.open();
    
    			// Remove the Media Library tab (media_upload_tabs filter is broken in 3.6)
    			jQuery(".media-menu a:contains('Media Library')").remove();
    		});
    <?php elseif(nextendIsMagento()): ?>
    
    <?php endif; ?>
    
    $(document.body).css('overflow', 'auto');
    images.sortable({
        connectWith: deleteimage,
        placeholder: "ui-state-highlight",
        forcePlaceholderSize: true,
        revert: 400,
        appendTo: document.body,
        tolerance: 'pointer',
        over: function(){
            $(window).trigger('resize');
        },
        out: function(){
            $(window).trigger('resize');
        }
    });
    
    $(window).on('resize', function(){
        deleteimage.height(images.height()-14);
    });
    
    deleteimage.sortable({
        revert: 200,
        tolerance: 'pointer',
        appendTo: document.body,
        over: function(){
            deleteimage.addClass('over');
            $(window).trigger('resize');
        },
        out: function(){
            deleteimage.removeClass('over');
            $(window).trigger('resize');
        },
        update: function(event, ui) {
            ui.item.remove();
            $(window).trigger('resize');
        } 
    });
    images.disableSelection();
    
    form.on('submit', function(){
        images.find('img').each(function(){
            $('<input type="checkbox" style="display: none;" name="images[]" value="'+this.src+'" checked />').appendTo(form);
        });
    });
});
</script>

<?php
$this->loadFragment('secondcolend');
?>

<?php
$this->loadFragment('footer');

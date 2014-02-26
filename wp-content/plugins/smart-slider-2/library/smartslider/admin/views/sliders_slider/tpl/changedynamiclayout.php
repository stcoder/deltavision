<?php
$this->loadFragment('headerstart');

$sliderid = NextendRequest::getInt('sliderid');

if(nextendIsJoomla()){
    nextendimportsmartslider2('nextend.smartslider.joomla.slider');

    $slider = new NextendSliderJoomla($sliderid, $sliderid, dirname(__FILE__));
}else if(nextendIsWordpress()){
    nextendimportsmartslider2('nextend.smartslider.wordpress.slider');
    $d = array();
    $slider = new NextendSliderWordpress($sliderid, $d, dirname(__FILE__));
}else if(nextendIsMagento()){
    nextendimportsmartslider2('nextend.smartslider.magento.slider');
    $d = array();
    $slider = new NextendSliderMagento($sliderid, $d, dirname(__FILE__));
}
$slider->_responsive = false;
$slidersModel = new NextendSmartsliderAdminModelSliders(null);
$fakeslider = $slidersModel->getSlider($sliderid);
$slider->_slider = new NextendData();
$slider->_slider->loadArray($fakeslider);

$slider->_sliderParams = new NextendData();
$slider->_sliderParams->loadJSON($fakeslider['params']);

$slider->_generatorParams = new NextendData();
$slider->_generatorParams->loadJSON($fakeslider['generator']);

$slider->_generatorSlideParams = new NextendData();
$slider->_generatorSlideParams->loadJSON($fakeslider['slide']);


$group = array();
$list = array();
NextendPlugin::callPlugin('nextendslidergenerator', 'onNextendSliderGeneratorList', array(&$group, &$list));

$source = $slider->_generatorParams->get('source');
$sourcetype = null;
foreach($list AS $ls){
    foreach($ls AS $k => $l){
        if($k == $source){
            $sourcetype = $l;
            break;
        }
    }
    if($sourcetype) break;
}

$path = $sourcetype[1];
include($path.'slide.php');

$layout = NextendRequest::getVar('layout', 'default');
if(!isset($slide[$layout])) $layout = 'default';

if(isset($slide[$layout]['slider'])) $slider->_generatorParams->loadArray($slide[$layout]['slider']);

$slider->_generatorSlideParams->loadArray($slide[$layout]['slide']);
$slider->_generatorParams->set('generateslides', intval($slider->_generatorParams->get('generateslides')).'|*|0|*|0');

function generateDynamicThumbs($controller, $path, $sliderid, $id, $data){
    ?>
    <div class="smartslider-dynamic-thumb">
        <div><?php echo $data['title']; ?></div>
        <img src="<?php echo NextendUri::pathToUri(NextendFilesystem::translateToMediaPath($path.$id.'.png')) ?>" /><br />
        <a class="button small b" href="<?php echo $controller->route('controller=sliders&view=sliders_slider&action=changedynamiclayout&sliderid='.$sliderid.'&save=1&layout='.$id); ?>">Choose</a>
         &nbsp;&nbsp;
        <a class="button small" href="<?php echo $controller->route('controller=sliders&view=sliders_slider&action=changedynamiclayout&fontset='.NextendRequest::getInt('fontset', 0).'&sliderid='.$sliderid.'&layout='.$id); ?>">Preview</a>
    </div>
    <?php
}


?>
<div class="smartslider-button smartslider-cancel" onclick="window.nextendsave=true;location.href='<?php echo $this->route('controller=sliders&view=sliders_slider&action=dashboard&sliderid='.$sliderid); ?>';"><?php echo NextendText::_('Skip'); ?></div>
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
    $css->addCssFile(NEXTEND_SMART_SLIDER2_ASSETS . 'admin/css/create.css');
?>
<h2>Choose layout</h2>
<div class="blue-container">
    <?php
    foreach($slide AS $id => $data){
        generateDynamicThumbs($this, $path, $sliderid, $id, $data);
    }
    ?>
</div>

<h2>Preview</h2>
<div style="overflow: auto; padding: 10px;">
    <?php 
    
    $slider->_replaceSlider = $fakeslider;
    $slider->render();
    ?>
</div>
<?php if(NextendRequest::getInt('fontset', 0) == 0) : ?>
<div class="box" style="width: 50%">
    <h3>Missing fonts?</h3>
    <p>These layouts need custom font set to display properly. If font set have not loaded yet, you should load them.<br />
    Note: This action will clear the current font set on this slider.</p>
    <a href="<?php echo $this->route('controller=sliders&view=sliders_slider&action=changedynamiclayout&loadfontset=1&fontset=1&sliderid='.$sliderid.'&layout='.NextendRequest::getVar('layout')); ?>" style="margin-top: 10px;" class="button b">Load font set</a>
</div>
<?php endif; ?>

<?php
$this->loadFragment('secondcolend');
?>

<?php
$this->loadFragment('footer');

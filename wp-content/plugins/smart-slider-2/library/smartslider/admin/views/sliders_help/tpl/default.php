<?php
$this->loadFragment('headerstart');
?>
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
$css = NextendCss::getInstance();
$css->addCssLibraryFile('form.css');
?>
<form method="post" action="" id="smartslider-form">           
  <style>  
  span.platform {
      background: none repeat scroll 0 0 #845CA5;
      border-radius: 2px 2px 2px 2px;
      color: #FFFFFF;
      font-size: 10px;
      font-weight: 600;
      line-height: 14px;
      padding: 0 5px 1px;
      text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
      text-transform: uppercase;
      vertical-align: 1px;
  }
  span.wordpress {
      background: none repeat scroll 0 0 #2F7799;
      border-radius: 2px 2px 2px 2px;
      color: #FFFFFF;
      font-size: 10px;
      font-weight: 600;
      line-height: 14px;
      padding: 0 5px 1px;
      text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
      text-transform: uppercase;
      vertical-align: 1px;
  }
  .nextend-element .nextend-text span{     color: #6C7581;     font-size: 12px;     font-weight: normal;     line-height: 11px;     text-shadow: 0 1px 1px white;   }     .nextend-element .nextend-text span a{     color: #6C7581;     font-size: 12px;     font-weight: normal;     line-height: 11px;     text-shadow: 0 1px 1px white;     text-decoration: none;   }   .nextend-element .nextend-text span a:HOVER{     color: #2485E3;   }   .ni .doc{     padding: 10px 20px 20px;     background-color: #EEF3F8;     border-bottom: 1px solid rgba(0, 0, 0, 0.1);   }   .ni .tutorial-videos{     padding: 20px;     background-color: #EEF3F8;     border-bottom: 1px solid rgba(0, 0, 0, 0.1);   }   .ni .tutorial-videos iframe{   }     .ni .tutorial-videos .video{     float: left;     margin: 0 50px 20px 0;   }   .ni .tutorial-videos span{       color: #6C7581;     font-size: 16px;     font-weight: normal;     line-height: 11px;     text-shadow: 0 1px 1px white;     text-align: center;     display: block;     margin-bottom: 10px;     font-family: 'Open Sans',Arial,sans-serif;   }     .ni .doc .categorycontainer .left,   .ni .doc .categorycontainer .right{     width: 48%;     float: left;     margin-left: 15px;     }    .ni .doc .categorycontainer{       color: #6C7581;     font-size: 12px;     font-weight: normal;     text-shadow: 0 1px 1px white;     font-family: 'Open Sans',Arial,sans-serif;   }   .ni .doc .categorycontainer dt{     font-size: 16px;     margin: 15px 0 5px;     font-weight: normal;   }     .ni .doc .categorycontainer dd,     .ni .doc .categorycontainer dl{     margin: 0;   }     .ni .doc .categorycontainer ul{     padding-left: 10px;   }   .ni .doc .categorycontainer li{     line-height: 20px;   }   .ni .doc .categorycontainer li a{   font-weight: 600;      color: #738AA2;     font-size: 13px;     text-decoration: none;     text-shadow: 0 1px 1px white;   }   .ni .doc .categorycontainer li a:HOVER,     .ni .doc .categorycontainer li:HOVER{     color: #2485E3;   }      
  </style>     
  <div class="nextend-form">   
    <div class="ni">
		<h2><?php echo NextendText::_('General_information'); ?></h2>             
      <table class="ni">                                 
          <tr>                         
            <td >                             
              <label for="slidertitle" id="slidertitle-lbl"><?php echo NextendText::_('Version_Number'); ?>
              </label>                           </td>                         
            <td >      
				<?php
                if(nextendIsJoomla()){
                    preg_match('/<version>(.*?)<\\/version>/', file_get_contents(JPATH_ADMINISTRATOR.'/components/com_smartslider2/smartslider2.xml'),$out);
                    echo $out[1];
                }else if(nextendIsWordpress()){
                    $plg = get_plugin_data( NEXTEND_SMART_SLIDER2.basename(NEXTEND_SMART_SLIDER2).'.php');
                    echo $plg['Version'];
                }else if(nextendIsMagento()){
                    echo (string) Mage::getConfig()->getNode()->modules->Nextend_SmartSlider2->version;
                }
                
                ?>                
			  </td>                     
          </tr>                                       
          <tr>                         
            <td>                             
              <label for="slidertitle" id="slidertitle-lbl"><?php echo NextendText::_('Documentation'); ?>
              </label>                           </td>                         
            <td >                      
                  <a href="http://www.nextendweb.com/wiki/smart-slider-documentation/"><?php echo NextendText::_('Read_the_documentation'); ?></a>                
        </td>                     
          </tr>                                       
          <tr>                         
            <td>                             
              <label for="slidertitle" id="slidertitle-lbl"><?php echo NextendText::_('Support'); ?> 
              </label>                           </td>                         
            <td>                       
				<a href="http://www.nextendweb.com/smart-slider#support"><?php echo NextendText::_('Write_a_support_ticket'); ?></a>                
			  </td>                     
          </tr>                          
        </tbody>             
      </table>               
	  <h2><?php echo NextendText::_('Documentation'); ?></h2>             
      <div class="doc">                 
        <div class='categorycontainer nextend-clearfix'>              
          <div class="left">            
            <dl>              
              <dt>    <i></i>                
                <span><?php echo NextendText::_('Installation_General'); ?>
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/installation-on-joomla/"><?php echo NextendText::_('Install_instruction_for_Joomla'); ?>
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/how-to-create-a-smart-slider-2-module/"><?php echo NextendText::_('How_to_create_a_Smart_Slider_2_module'); ?>
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/installation-wordpress/"><?php echo NextendText::_('Install_instruction_for_WordPress'); ?>
                    <span class="wordpress">WordPress                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/system-requirements/"><?php echo NextendText::_('System_requirements_PHP_SQL_etc'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/download-section/"><?php echo NextendText::_('Download_section_cancel_subscription'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/changelog"><?php echo NextendText::_('Changelog_for_Smart_Slider_2'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/known-problems/"><?php echo NextendText::_('Known_problems'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/translation/"><?php echo NextendText::_('Translation'); ?></a>                  
                  </li>                
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Usage'); ?>
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/basics/"><?php echo NextendText::_('Basics'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/slider-and-widgets/"><?php echo NextendText::_('Slider_and_widgets'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/slide-layers-and-items/"><?php echo NextendText::_('Slide_layers_and_items'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/layer-animation/"><?php echo NextendText::_('Slide_layer_animation'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/layouts/"><?php echo NextendText::_('Layout'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/generator/"><?php echo NextendText::_('Generator'); ?></a>                  
                  </li>             
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Settings_in_depth'); ?>                
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/global-settings/"><?php echo NextendText::_('Global_settings'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/fonts/"><?php echo NextendText::_('Fonts'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/slider-settings/"><?php echo NextendText::_('Slider_settings'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/slide-settings/"><?php echo NextendText::_('Slide_settings'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/layout-settings/"><?php echo NextendText::_('Layout_settings'); ?></a>                  
                  </li>                    
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/import-export/"><?php echo NextendText::_('Import_and_Export'); ?></a>                  
                  </li>      
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Slider_types'); ?>
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/simple-slider-type/"><?php echo NextendText::_('Simple_slider_type'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/full-page-slider-type/"><?php echo NextendText::_('Full_page_type'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/horizontal-accordion-slider-type/"><?php echo NextendText::_('Horizontal_accordion_slider_type'); ?></a>
		  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/vertical-accordion-slider-type/"><?php echo NextendText::_('Vertical_accordion_slider_type'); ?></a> 
                  </li>                
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Slider_widgets'); ?>
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/widgets/"><?php echo NextendText::_('More_about_widgets'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/arrows/"><?php echo NextendText::_('Arrows'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/bullets"><?php echo NextendText::_('Bullets'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/autoplay-button/"><?php echo NextendText::_('Autoplay_button'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/indicator-autoplay"><?php echo NextendText::_('Indicator_autoplay'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/bar"><?php echo NextendText::_('Bar'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/thumbnails"><?php echo NextendText::_('Thumbnails'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/shadows"><?php echo NextendText::_('Shadows'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/html"><?php echo NextendText::_('HTML'); ?></a>                  
                  </li>                
                </ul>              
              </dd>            
            </dl>          
          </div>          
          <div class="right">            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Items'); ?>                 
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/button/"><?php echo NextendText::_('Button'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/caption/"><?php echo NextendText::_('Caption'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/fade/"><?php echo NextendText::_('Fade'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/flipper/"><?php echo NextendText::_('Flipper'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/heading/"><?php echo NextendText::_('Heading'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/html-item/"><?php echo NextendText::_('HTML'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/iframe/"><?php echo NextendText::_('Iframe'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/paragraph/"><?php echo NextendText::_('Paragraph'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/special/"><?php echo NextendText::_('Special'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/tag/"><?php echo NextendText::_('Tag'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/youtube/"><?php echo NextendText::_('YouTube'); ?></a>                  
                  </li>                
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Generators'); ?>                 
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/facebook-generator/"><?php echo NextendText::_('Facebook'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/flickr-generator/"><?php echo NextendText::_('Flickr'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/instagram-generator/"><?php echo NextendText::_('Instagram'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/youtube-generator/"><?php echo NextendText::_('YouTube'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/twitter-generator/"><?php echo NextendText::_('Twitter'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/image-from-folder-joomla-generator/"><?php echo NextendText::_('Image_from_folder'); ?>      
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/joomla-content-generator/"><?php echo NextendText::_('Joomla_content'); ?>          
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/k2-items-generator/"><?php echo NextendText::_('K2_items'); ?>
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/cobalt-cck-generator/"><?php echo NextendText::_('Cobalt_CCK'); ?>
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/ignite-gallery-generator/"><?php echo NextendText::_('Ignite_Gallery'); ?>          
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/phoca-gallery-generator/"><?php echo NextendText::_('Phoca_Gallery'); ?>                     
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/virtuemart2-generator/"><?php echo NextendText::_('Virtuemart_2'); ?>   
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/redshop-generator/"><?php echo NextendText::_('redSHOP'); ?>                      
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/joomshopping-generator/"><?php echo NextendText::_('JoomShopping'); ?>                      
                    <span class="platform">Joomla                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/image-from-folder-wordpress-generator/"><?php echo NextendText::_('Image_from_folder'); ?>
                    <span class="wordpress">WordPress                     
                    </span></a>                  
                  </li>                  
                  <li>                  
                  <a target="_blank"  href="http://www.nextendweb.com/wiki/smart-slider-documentation/posts-generator/"><?php echo NextendText::_('Posts'); ?>                 
                    <span class="wordpress">WordPress                     
                    </span></a>                  
                  </li>                
                </ul>              
              </dd>            
            </dl>            
            <dl>              
              <dt>                     
                <span><?php echo NextendText::_('Extra_features'); ?>
                </span>                 
              </dt>              
              <dd>                
                <ul>                  
                  <li>                  
                  <a href="http://www.nextendweb.com/wiki/smart-slider-documentation/javascript-api/"><?php echo NextendText::_('JavaScript_API'); ?></a>                  
                  </li>                  
                  <li>                  
                  <a href="http://www.nextendweb.com/wiki/smart-slider-documentation/advanced-generator-functions/"><?php echo NextendText::_('Advanced_generator_functions'); ?></a>                  
                  </li>                
                </ul>              
              </dd>            
            </dl>          
          </div>          
          <div style="clear:both;">          
          </div>                          
        </div>           
      </div>                
      <h2><?php echo NextendText::_('Tutorial_videos'); ?></h2>               
        <div class="tutorial-videos nextend-clearfix">
            <iframe width="640" height="360" src="//www.youtube.com/embed/videoseries?list=PLSawiBnEUNfvCEnV5dGOAQABZ8TBx8fJg&vq=hd1080&hd=1" frameborder="0" allowfullscreen></iframe>                 
        </div>                        
</div>   
</form>

<?php
$this->loadFragment('secondcolend');
?>
<?php
$this->loadFragment('footer');

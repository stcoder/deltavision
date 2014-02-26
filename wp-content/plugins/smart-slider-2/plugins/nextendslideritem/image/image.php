<?php

nextendimportsmartslider2('nextend.smartslider.plugin.slideritem');

class plgNextendSliderItemImage extends plgNextendSliderItemAbstract {

    var $_identifier = 'image';

    var $_title = 'Image';

    function getTemplate() {
        return '<div data-click="{onmouseclick_esc}" data-enter="{onmouseenter_esc}" data-leave="{onmouseleave_esc}"><a href="{url}" target="{target}" style="display: block;background: none !important;" >
          <img id="{{uuid}}" src="{image}" style="display: block; max-width: 100%; {css};width:{width};height:{height};" class="{kenburnsclass}" alt="{alt_esc}" title="{title_esc}" />
        </a></div>';
    }

    function getValues() {
        return array(
            'image' => NextendSmartSliderSettings::get('placeholder'),
            'size' => '100%|*|',
            'link' => '#|*|_self',
            'url' => '',
            'target' => '_self',
            'width' => '100%',
            'height' => 'auto',
            'css' => '',
            'alt' => NextendText::_('Image_not_available'),
            'title' => '',
            'onmouseclick' => '',
            'onmouseenter' => '',
            'onmouseleave' => '',
            'kenburns' => 0,
            'kenburnsclass' => ''
        );
    }

    function getPath() {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . $this->_identifier . DIRECTORY_SEPARATOR;
    }
}

NextendPlugin::addPlugin('nextendslideritem', 'plgNextendSliderItemImage');
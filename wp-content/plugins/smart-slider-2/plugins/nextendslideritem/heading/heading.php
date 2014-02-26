<?php

nextendimportsmartslider2('nextend.smartslider.plugin.slideritem');

class plgNextendSliderItemHeading extends plgNextendSliderItemAbstract {

    var $_identifier = 'heading';
    var $_title = 'Heading';

    function getTemplate() {
        return "
            <h{priority} class='{fontclass} {class}' style=\"{fontsizer}{fontcolorr}{css_esc}\" data-click=\"{onmouseclick_esc}\" data-enter=\"{onmouseenter_esc}\" data-leave=\"{onmouseleave_esc}\">
                <a href='{url}' target='{target}' style='{fontcolorr}'>
                  {heading}
                </a>
            </h{priority}>
        ";
    }

    function getValues() {
        return array(
            'fontsizer' => '',
            'fontcolorr' => '',
            'priority' => '1',
            'heading' =>  NextendText::_('Heading'),
            'link' => '#|*|_self',
            'url' => '',
            'target' => '_self',
            'fontclass' => 'sliderfont2',
            'class' => '',
            'css' => 'padding: 0;
                      margin: 0;
                      background: none;
                      box-shadow: none;',
            'onmouseclick' => '',
            'onmouseenter' => '',
            'onmouseleave' => ''
        );
    }

    function getPath() {
        return dirname(__FILE__) . DIRECTORY_SEPARATOR . $this->_identifier . DIRECTORY_SEPARATOR;
    }

}

NextendPlugin::addPlugin('nextendslideritem', 'plgNextendSliderItemHeading');
<?php

global $lsPluginPath;

if(is_array($slides)) {
    $data .= NL . '<script type="text/javascript">' . NL;

        $data .= TAB . 'jQuery(document).ready(function() { ' . NL;

            $data .= TAB . TAB .'jQuery("#layerslider_'.$id.'").layerSlider({ ' . NL;
                $data .= TAB . TAB . TAB . 'width : \''.layerslider_check_unit($slides['properties']['width']).'\',' . NL;
                $data .= TAB . TAB . TAB . 'height : \''.layerslider_check_unit($slides['properties']['height']).'\','. NL;
                $data .= TAB . TAB . TAB . 'responsive : '; $data .= isset($slides['properties']['responsive']) ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'responsiveUnder : '; $data .= !empty($slides['properties']['responsiveunder']) ? $slides['properties']['responsiveunder'] : '0'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'sublayerContainer : '; $data .= !empty($slides['properties']['sublayercontainer']) ? $slides['properties']['sublayercontainer'] : '0'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'autoStart : '; $data .= ( isset($slides['properties']['autostart']) && $slides['properties']['autostart'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'pauseOnHover : '; $data .= ( isset($slides['properties']['pauseonhover']) && $slides['properties']['pauseonhover'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'firstLayer : '; $data .= is_numeric($slides['properties']['firstlayer']) ? $slides['properties']['firstlayer'] : '\'random\''; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'animateFirstLayer : '; $data .= ( isset($slides['properties']['animatefirstlayer']) && $slides['properties']['animatefirstlayer'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'randomSlideshow : '; $data .= ( isset($slides['properties']['randomslideshow']) && $slides['properties']['randomslideshow'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'twoWaySlideshow : '; $data .= ( isset($slides['properties']['twowayslideshow']) && $slides['properties']['twowayslideshow'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'keybNav : '; $data .= ( isset($slides['properties']['keybnav']) && $slides['properties']['keybnav'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'touchNav : '; $data .= ( isset($slides['properties']['touchnav']) && $slides['properties']['touchnav'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'imgPreload : '; $data .= ( isset($slides['properties']['imgpreload']) && $slides['properties']['imgpreload'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'navPrevNext : '; $data .= ( isset($slides['properties']['navprevnext']) && $slides['properties']['navprevnext'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'navStartStop : '; $data .= ( isset($slides['properties']['navstartstop']) && $slides['properties']['navstartstop'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'navButtons : '; $data .= ( isset($slides['properties']['navbuttons']) && $slides['properties']['navbuttons'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'hoverPrevNext : '; $data .= ( isset($slides['properties']['hoverprevnext']) && $slides['properties']['hoverprevnext'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'hoverBottomNav : '; $data .= ( isset($slides['properties']['hoverbottomnav']) && $slides['properties']['hoverbottomnav'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'thumbnailNavigation : \''; $data .= !empty($slides['properties']['thumb_nav']) ? $slides['properties']['thumb_nav'] : 'hover'; $data .= '\','. NL;
                $data .= TAB . TAB . TAB . 'tnWidth : '; $data .= !empty($slides['properties']['thumb_width']) ? $slides['properties']['thumb_width'] : '100'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'tnHeight : '; $data .= !empty($slides['properties']['thumb_height']) ? $slides['properties']['thumb_height'] : '60'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'tnContainerWidth : \''; $data .= !empty($slides['properties']['thumb_container_width']) ? $slides['properties']['thumb_container_width'] : '60%'; $data .= '\','. NL;
                $data .= TAB . TAB . TAB . 'tnActiveOpacity : '; $data .= !empty($slides['properties']['thumb_active_opacity']) ? $slides['properties']['thumb_active_opacity'] : '35'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'tnInactiveOpacity : '; $data .= !empty($slides['properties']['thumb_inactive_opacity']) ? $slides['properties']['thumb_inactive_opacity'] : '100'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'skin : \''; $data .= $slides['properties']['skin']; $data .= '\','. NL;
                $data .= TAB . TAB . TAB . 'skinsPath : \''; $data .= $GLOBALS['lsPluginPath'].'skins/'; $data .= '\','. NL;

                if(!empty($slides['properties']['backgroundcolor'])) :
        		$data .= TAB . TAB . TAB . 'globalBGColor : \''; $data .= $slides['properties']['backgroundcolor']; $data .= '\','. NL;
        		endif;
        	    if(!empty($slides['properties']['backgroundimage'])) :
        		$data .= TAB . TAB . TAB . 'globalBGImage : \''; $data .= !empty($slides['properties']['backgroundimage']) ? '\''.$slides['properties']['backgroundimage'].'\'' : 'false'; $data .= '\','. NL;
        		endif;

        		$data .= TAB . TAB . TAB . 'yourLogo : '; $data .= !empty($slides['properties']['yourlogo']) ? '\''.$slides['properties']['yourlogo'].'\'' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'yourLogoStyle : '; $data .= !empty($slides['properties']['yourlogostyle']) ? '\''.$slides['properties']['yourlogostyle'].'\'' : '\'position: absolute; left: 10px; top: 10px; z-index: 99;\''; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'yourLogoLink : '; $data .= !empty($slides['properties']['yourlogolink']) ? '\''.$slides['properties']['yourlogolink'].'\'' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'yourLogoTarget : '; $data .= !empty($slides['properties']['yourlogotarget']) ? '\''.$slides['properties']['yourlogotarget'].'\'' : '\'_self\''; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'loops : '; $data .= !empty($slides['properties']['loops']) ? $slides['properties']['loops'] : 0; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'forceLoopNum : '; $data .= ( isset($slides['properties']['forceloopnum']) && $slides['properties']['forceloopnum'] != 'false') ? 'true' : 'false'; $data .= ','. NL;
                $data .= TAB . TAB . TAB . 'autoPlayVideos : '; $data .= ( isset($slides['properties']['autoplayvideos']) && $slides['properties']['autoplayvideos'] != 'false') ? 'true' : 'false'; $data .= ','. NL;


        		$autoPauseSlideshow = !empty($slides['properties']['autopauseslideshow']) ? $slides['properties']['autopauseslideshow'] : 'auto';

        		if($autoPauseSlideshow == 'auto') {
            		$autoPauseSlideshow = '\'auto\'';

        		} else if($autoPauseSlideshow == 'enabled') {
                    $autoPauseSlideshow = 'true';

                } else if($autoPauseSlideshow == 'disabled') {
                    $autoPauseSlideshow = 'false';
                }


        		$data .= TAB . TAB . TAB . 'autoPauseSlideshow : '; $data .= $autoPauseSlideshow; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'youtubePreview : '; $data .= !empty($slides['properties']['youtubepreview']) ? '\''.$slides['properties']['youtubepreview'].'\'' : '\'maxresdefault.jpg\''; $data .= ','. NL;

        		$data .= TAB . TAB . TAB . 'cbInit : '; $data .= !empty($slides['properties']['cbinit']) ? stripslashes($slides['properties']['cbinit']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbStart : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbstart']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbStop : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbstop']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbPause : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbpause']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbAnimStart : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbanimstart']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbAnimStop : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbanimstop']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbPrev : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbprev']) : 'function() {}'; $data .= ','. NL;
        		$data .= TAB . TAB . TAB . 'cbNext : '; $data .= !empty($slides['properties']['cbstart']) ? stripslashes($slides['properties']['cbnext']) : 'function() {}'; $data .= NL;
            $data .= TAB .TAB . '});' . NL;
        $data .= TAB . '});' . NL;
    $data .= '</script>' . NL ;
}
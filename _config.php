<?php

$dir = basename(dirname(__FILE__));

HtmlEditorConfig::get('cms')->enablePlugins(
    array(
        'youtube' => '/'.$dir.'/javascript/youtubeshortcode.js'
    )
);

ShortcodeParser::get()->register('Youtube',array('YoutubeShortCode_Controller','YoutubeShortCodeHandler'));
HtmlEditorConfig::get('cms')->setButtonsForLine('4', 'youtube');
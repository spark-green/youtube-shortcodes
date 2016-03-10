<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AsideAdmin
 *
 * @author julian.smith
 */
class YoutubeAdmin extends ModelAdmin {

    public static $managed_models = array(
        'Youtube'
    );
    public static $url_segment = 'youtubes';
    public static $menu_title = 'Youtube Videos';
}

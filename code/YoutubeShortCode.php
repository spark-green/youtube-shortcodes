<?php

class YoutubeShortCode_Controller extends ContentController{
    
        private static $allowed_actions = array(
		'YoutubeOptionsForForm'
	);

        public function init(){
            parent::init();
                Requirements::javascript("/youtube/javascript/youtubeOptions.js");
                Requirements::javascript("/youtube/javascript/youtubeshotcode.js");
	}
        
	public function canView($member = NULL){
		return true; 
	}
	
	protected $templateViewFile = 'HTMLYoutubeEditor';

        public function YoutubeOptionsForForm() {
		$youtubes = Youtube::get()->sort('Name ASC');
               
                $arr = array();
                foreach ($youtubes as $y) {
                    $arr[] = array( "ID" => $y->ID, "Name" => $y->Name);
                    }
                return json_encode($arr);
	}
        
        public static function YoutubeShortCodeHandler($arguments, $content, $parser, $shortcode) {
            $contentBlock = Youtube::get()->filter(array("ID" => $arguments["ID"]))->First();
            if ($contentBlock)
                return $contentBlock->renderWith("Youtube", $arguments);
        }
}

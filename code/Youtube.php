<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Youtube
 *
 * @author julian.smith
 */
class Youtube extends DataObject {

	static $db = array (
            "Name" => "varchar",
            "YoutubeID" => "varchar",
            "BackgroundColour" => "Enum('blue,yellow,transparent')",
            'IsWidescreen' => 'boolean',
            'IsHalfWidth' => 'boolean',
            "PreviewScript" => 'HTMLText',
            "Script" => 'HTMLText'
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		return $fields;
	}
        
        
    /**
     * @param Member $member
     * @return boolean
     */
    public function canView($member = null) {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }
        return Permission::check(array('ADMIN', 'CMS_ACCESS_YoutubeAdmin'), 'any', $member);
    }

    /**
     * @param Member $member
     * @return boolean
     */
    public function canEdit($member = null) {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }
        return Permission::check(array('ADMIN', 'CMS_ACCESS_YoutubeAdmin'), 'any', $member);
    }

    /**
     * @param Member $member
     * @return boolean
     */
    public function canDelete($member = null) {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }
        return Permission::check(array('ADMIN', 'CMS_ACCESS_YoutubeAdmin'), 'any', $member);
    }

    /**
     * @todo Should canCreate be a static method?
     *
     * @param Member $member
     * @return boolean
     */
    public function canCreate($member = null) {
        $extended = $this->extendedCan(__FUNCTION__, $member);
        if ($extended !== null) {
            return $extended;
        }
        return Permission::check(array('ADMIN', 'CMS_ACCESS_YoutubeAdmin'), 'any', $member);
    }
}

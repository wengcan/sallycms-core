<?php
/*
 * Copyright (c) 2012, webvariants GbR, http://www.webvariants.de
 *
 * This file is released under the terms of the MIT license. You can find the
 * complete text in the attached LICENSE file or online at:
 *
 * http://www.opensource.org/licenses/mit-license.php
 */

class sly_Util_User {
	/**
	 * return current user object
	 *
	 * @param  boolean $forceRefresh
	 * @return sly_Model_User
	 */
	public static function getCurrentUser($forceRefresh = false) {
		return sly_Service_Factory::getUserService()->getCurrentUser($forceRefresh);
	}

	/**
	 * @param  int $userID
	 * @return sly_Model_User
	 */
	public static function findById($userID) {
		return sly_Service_Factory::getUserService()->findById($userID);
	}

	/**
	 * checks whether a user exists or not
	 *
	 * @param  int $userID
	 * @return boolean
	 */
	public static function exists($userID) {
		return self::isValid(self::findById($userID));
	}

	/**
	 * @param  sly_Model_User $user
	 * @return boolean
	 */
	public static function isValid($user) {
		return $user instanceof sly_Model_User;
	}
}

<?php
/**
 * [PHPFOX_HEADER]
 */

defined('PHPFOX') or exit('NO DICE!');

/**
 *
 *
 * @copyright		[PHPFOX_COPYRIGHT]
 * @author  		Raymond Benc
 * @package  		Module_Friend
 * @version 		$Id: callback.class.php 6774 2013-10-11 12:11:06Z Fern $
 */
class Follow_Service_Callback extends Phpfox_Service
{
    public function __construct()
    {

    }

    public function getProfileSettings()
    {
        return array('follow.can_follow' => array(
            'phrase' => Phpfox::getPhrase('follow.can_follow')));
    }

    public function getProfileMenu($aUser){
        $aMenus[] = array(
            'phrase' => Phpfox::getPhrase('follow.follow'),
            'url' => 'profile.follow',
            'icon' => 'misc/application_view_list.png',
            'total' => Phpfox::getService('follow.total')->getTotalFollow($aUser['user_id'])
        );
        return $aMenus;
    }

    public function getProfileLink()
    {
        return 'profile.follow';
    }
    /**
     * If a call is made to an unknown method attempt to connect
     * it to a specific plug-in with the same name thus allowing
     * plug-in developers the ability to extend classes.
     *
     * @param string $sMethod is the name of the method
     * @param array $aArguments is the array of arguments of being passed
     */
    public function __call($sMethod, $aArguments)
    {
        /**
         * Check if such a plug-in exists and if it does call it.
         */
        if ($sPlugin = Phpfox_Plugin::get('friend.service_callback___call'))
        {
            return eval($sPlugin);
        }

        /**
         * No method or plug-in found we must throw a error.
         */
        Phpfox_Error::trigger('Call to undefined method ' . __CLASS__ . '::' . $sMethod . '()', E_USER_ERROR);
    }
}

?>

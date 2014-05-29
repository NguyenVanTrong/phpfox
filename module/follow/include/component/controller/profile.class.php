<?php
class Follow_Component_Controller_Profile extends Phpfox_Component
{
    public function process(){
        if (defined('PHPFOX_IS_AJAX_CONTROLLER'))
        {
            $aUser = Phpfox::getService('user')->get($this->request()->get('profile_id'));
            $this->setParam('aUser', $aUser);
        }

        $iPageSize = 12;
        $iPage = $this->request()->getInt('page');
        $aUser = $this->getParam('aUser');


        if (!Phpfox::getService('user.privacy')->hasAccess($aUser['user_id'], 'friend.view_friend'))
        {
            return Phpfox_Error::display('<div class="extra_info">' . Phpfox::getService('user')->getFirstName($aUser['full_name']) . ' has closed ' . Phpfox::getService('user')->gender($aUser['gender'], true) . ' friends section.</div>');
        }

        $aFriends = Phpfox::getService("follow")->get($aUser['user_id']);

        $this->template()->setTitle(Phpfox::getPhrase('friend.full_name_s_friends', array('full_name' => $aUser['full_name'])))
        ->setBreadcrumb('List User follow')
        ->setHeader('cache', array(
        'pager.css' => 'style_css',
        'friend.css' => 'style_css'
        )
        )
        ->assign(array(
        'aFriends' => $aFriends,
        'sFriendView' => $this->request()->get('view')
        )
        );
    }
}

?>
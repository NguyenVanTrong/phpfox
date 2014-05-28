<?php
defined('PHPFOX') or exit('NO DICE!');

class Follow_Component_Ajax_Ajax extends Phpfox_Ajax
{

    public function followUser(){
        $iuser_id = $this->get('u_id');
        Phpfox::getService('follow')->followUser((int)$iuser_id,Phpfox::getUserId());
        $this->hide("#section_follow")
            ->show("#section_unfollow");
        $this->alert("You are follower this user");
    }
    public function unfollowUser(){
        $iuser_id = $this->get('u_id');
        Phpfox::getService('follow')->unfollowUser((int)$iuser_id,Phpfox::getUserId());
        $this->hide("#section_unfollow")
            ->show("#section_follow");
        $this->alert("You are unfollower this user");
    }
}

?>
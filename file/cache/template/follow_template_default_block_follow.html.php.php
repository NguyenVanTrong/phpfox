<?php defined('PHPFOX') or exit('NO DICE!'); ?>
<?php /* Cached: May 29, 2014, 1:35 am */ ?>
<?php if (Phpfox ::isModule('follow') && Phpfox ::getService('user.privacy')->hasAccess('' . $this->_aVars['aUser']['user_id'] . '' , 'follow.can_follow' )): ?>
<?php if (Phpfox ::getService('follow')->checkFollow( ( int ) $this->_aVars['aUser']['user_id'] , Phpfox ::getUserId() )): ?>
        <li>
            <a href="#" id="section_follow" onclick="$.ajaxCall('follow.followUser','u_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('follow.follow'); ?></a>
        </li>
        <li>
            <a href="#" id="section_unfollow"  style="display: none;" onclick="$.ajaxCall('follow.unfollowUser','u_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('follow.unfollow'); ?></a>
        </li>
<?php elseif (Phpfox ::isModule('follow')): ?>
        <li>
            <a href="#" id="section_unfollow"  onclick="$.ajaxCall('follow.unfollowUser','u_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('follow.unfollow'); ?></a>
        </li>
        <li>
            <a href="#" id="section_follow" style="display: none;" onclick="$.ajaxCall('follow.followUser','u_id=<?php echo $this->_aVars['aUser']['user_id']; ?>'); return false;"><?php echo Phpfox::getPhrase('follow.follow'); ?></a>
        </li>
<?php endif;  endif; ?>

{if Phpfox::isModule('follow') && Phpfox::getService('user.privacy')->hasAccess('' . $aUser.user_id . '', 'follow.can_follow')}
    {if Phpfox::getService('follow')->checkFollow( (int)$aUser.user_id, Phpfox::getUserId() )}
        <li>
            <a href="#" id="section_follow" onclick="$.ajaxCall('follow.followUser','u_id={$aUser.user_id}'); return false;">{phrase var='follow.follow'}</a>
        </li>
        <li>
            <a href="#" id="section_unfollow"  style="display: none;" onclick="$.ajaxCall('follow.unfollowUser','u_id={$aUser.user_id}'); return false;">{phrase var='follow.unfollow'}</a>
        </li>
        {elseif Phpfox::isModule('follow')}
        <li>
            <a href="#" id="section_unfollow"  onclick="$.ajaxCall('follow.unfollowUser','u_id={$aUser.user_id}'); return false;">{phrase var='follow.unfollow'}</a>
        </li>
        <li>
            <a href="#" id="section_follow" style="display: none;" onclick="$.ajaxCall('follow.followUser','u_id={$aUser.user_id}'); return false;">{phrase var='follow.follow'}</a>
        </li>
    {/if}
{/if}
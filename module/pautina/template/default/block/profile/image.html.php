<?php 
defined('PHPFOX') or exit('NO DICE!');

?>
{if Phpfox::getService('profile')->timeline()}
{if !empty($sProfileImage)}
	<div class="profile_timeline_profile_photo">
        {if Phpfox::isModule('photo')}
			<a href="{permalink module='photo.album.profile' id=$aUser.user_id title=$aUser.user_name}">{$sProfileImage}</a>
		{else}
			{$sProfileImage}
		{/if}
	</div>
{/if}
{else}
{if !empty($sProfileImage)}
<div class="profile_image">
    <div class="profile_image_holder">
        {if Phpfox::isModule('photo')}
			<a href="{permalink module='photo.album.profile' id=$aUser.user_id title=$aUser.user_name}">{$sProfileImage}</a>
		{else}
			{$sProfileImage}
		{/if}
        {if Phpfox::getUserId() == $aUser.user_id}
        <div class="p_4">
            <a href="{url link='user.photo'}">{phrase var='profile.change_picture'}</a>
        </div>
        {/if}
    </div>



	{if Phpfox::getUserId() == $aUser.user_id}
	  {else}
    <div class="buttons_user">
        {if Phpfox::isModule('mail') && Phpfox::getService('user.privacy')->hasAccess('' . $aUser.user_id . '', 'mail.send_message')}
       <ul>
        <li id="liMail" class="profile-section-menu"><a href="#" onclick="$Core.composeMessage({left_curly}user_id: {$aUser.user_id}{right_curly}); return false;">
            <span>{phrase var='profile.send_message'}</span>
        </a>
        </li>
        {/if}
        {if Phpfox::isModule('friend') && (!$aUser.is_friend || $aUser.is_friend === 3)}
        <li id="js_add_friend_on_profile" class='profile-section-menu {if $aUser.is_friend === 3}  "js_profile_online_friend_request"{/if}'>
            <a href="#" onclick="return $Core.addAsFriend('{$aUser.user_id}');" title="{phrase var='profile.add_to_friends'}">
                <span>{if $aUser.is_friend === 3}{phrase var='profile.confirm_friend_request'}{else}{phrase var='profile.add_to_friends'}{/if}</span>
            </a>
        </li>
        {/if}
        {if $bCanPoke && Phpfox::getService('user.privacy')->hasAccess('' . $aUser.user_id . '', 'poke.can_send_poke')}
        <li id="liPoke" class="profile-section-menu">
            <a href="#" id="section_poke" onclick="$.ajaxCall('poke.doPoke', 'user_id=10', 'GET');tb_remove(); return false;">
                <span>{phrase var='poke.poke' full_name=''}</span>
            </a>
        </li>
        {/if}
        {plugin call='profile.template_block_menu_more'}
        {if (Phpfox::getUserParam('user.can_block_other_members') && Phpfox::getUserGroupParam('' . $aUser.user_group_id . '', 'user.can_be_blocked_by_others'))
        || (isset($aUser.is_online) && $aUser.is_online && Phpfox::isModule('im') && Phpfox::getParam('im.enable_im_in_footer_bar') && $aUser.is_friend == 1)
        || (Phpfox::getUserParam('user.can_feature'))
        || (isset($bPassMenuMore))
        }
        <li><a href="#" id="section_menu_more" class="js_hover_title"><span class="section_menu_more_image"></span><span class="js_hover_info">{phrase var='profile.more'}</span>Больше</a></li>
        {/if}
       </ul>
    </div>
	{/if}
</div>
{/if}

{/if}

<div class="js_cache_check_on_content_block" style="display:none;"></div>
<div class="js_cache_profile_id" style="display:none;">{$aUser.user_id}</div>
<div class="js_cache_profile_user_name" style="display:none;">{$aUser.user_name}</div>
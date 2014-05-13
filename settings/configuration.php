<?php if (!defined('APPLICATION')) exit();
// DO NOT EDIT THIS FILE
// All of the settings defined here can be overridden in the /conf/config.php file.

$Configuration['Yaga']['Reactions']['Enabled'] = TRUE;
$Configuration['Yaga']['Badges']['Enabled'] = TRUE;
$Configuration['Yaga']['Ranks']['Enabled'] = TRUE;

$Configuration['Preferences']['Popup']['BadgeAward'] = '1';
$Configuration['Preferences']['Email']['BadgeAward'] = '0';
$Configuration['Preferences']['Popup']['RankPromotion'] = '1';
$Configuration['Preferences']['Email']['RankPromotion'] = '1';

$Configuration['Modules']['Yaga']['Panel'] = array('MeModule', 'UserBoxModule', 'ActivityFilterModule', 'UserPhotoModule', 'ProfileFilterModule', 'SideMenuModule', 'UserInfoModule', 'GuestModule', 'Ads');
$Configuration['Modules']['Yaga']['Content'] = array('MessageModule', 'MeModule', 'UserBoxModule', 'ProfileOptionsModule', 'Notices', 'ActivityFilterModule', 'ProfileFilterModule', 'BestFilterModule', 'Content', 'Ads');

$Configuration['Yaga']['BestContent']['PerPage'] = 10;
$Configuration['Yaga']['Ranks']['Photo'] = 'applications/yaga/design/images/default_promotion.png';
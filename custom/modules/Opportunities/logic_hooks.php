<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array(1, 'Opportunities push feed', 'modules/Opportunities/SugarFeeds/OppFeed.php','OppFeed', 'pushFeed'); 
$hook_array['after_ui_frame'] = Array(); 
$hook_array['after_ui_frame'][] = Array(1, 'Opportunities InsideView frame', 'modules/Connectors/connectors/sources/ext/rest/insideview/InsideViewLogicHook.php','InsideViewLogicHook', 'showFrame'); 


$hook_array['after_retrieve'][] = Array(1, 'Get current time and display', 'custom/modules/Opportunities/Ext/GetCurrentTime.php','GetCurrentTime', 'getTime');


$hook_array['process_record'][] = Array(1, 'Get current time and display', 'custom/modules/Opportunities/Ext/GetCurrentTime.php','GetCurrentTime', 'getTime');



?>
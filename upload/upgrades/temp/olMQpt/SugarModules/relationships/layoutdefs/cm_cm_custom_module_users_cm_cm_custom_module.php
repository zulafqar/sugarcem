<?php
 // created: 2017-03-03 10:08:40
$layout_defs["cm_cm_custom_module"]["subpanel_setup"]['cm_cm_custom_module_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CM_CM_CUSTOM_MODULE_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'cm_cm_custom_module_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

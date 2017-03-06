<?php
// created: 2017-03-03 11:42:38
$dictionary["User"]["fields"]["cm_custom_module_users"] = array (
  'name' => 'cm_custom_module_users',
  'type' => 'link',
  'relationship' => 'cm_custom_module_users',
  'source' => 'non-db',
  'module' => 'cm_custom_module',
  'bean_name' => 'cm_custom_module',
  'vname' => 'LBL_CM_CUSTOM_MODULE_USERS_FROM_CM_CUSTOM_MODULE_TITLE',
  'id_name' => 'cm_custom_module_userscm_custom_module_ida',
);
$dictionary["User"]["fields"]["cm_custom_module_users_name"] = array (
  'name' => 'cm_custom_module_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_CUSTOM_MODULE_USERS_FROM_CM_CUSTOM_MODULE_TITLE',
  'save' => true,
  'id_name' => 'cm_custom_module_userscm_custom_module_ida',
  'link' => 'cm_custom_module_users',
  'table' => 'cm_custom_module',
  'module' => 'cm_custom_module',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["cm_custom_module_userscm_custom_module_ida"] = array (
  'name' => 'cm_custom_module_userscm_custom_module_ida',
  'type' => 'link',
  'relationship' => 'cm_custom_module_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CM_CUSTOM_MODULE_USERS_FROM_USERS_TITLE',
);

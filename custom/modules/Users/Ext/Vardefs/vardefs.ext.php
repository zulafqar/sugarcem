<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2017-03-06 10:52:37
$dictionary["User"]["fields"]["cm_test_users"] = array (
  'name' => 'cm_test_users',
  'type' => 'link',
  'relationship' => 'cm_test_users',
  'source' => 'non-db',
  'module' => 'cm_Test',
  'bean_name' => false,
  'vname' => 'LBL_CM_TEST_USERS_FROM_CM_TEST_TITLE',
  'id_name' => 'cm_test_userscm_test_ida',
);
$dictionary["User"]["fields"]["cm_test_users_name"] = array (
  'name' => 'cm_test_users_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CM_TEST_USERS_FROM_CM_TEST_TITLE',
  'save' => true,
  'id_name' => 'cm_test_userscm_test_ida',
  'link' => 'cm_test_users',
  'table' => 'cm_test',
  'module' => 'cm_Test',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["cm_test_userscm_test_ida"] = array (
  'name' => 'cm_test_userscm_test_ida',
  'type' => 'link',
  'relationship' => 'cm_test_users',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CM_TEST_USERS_FROM_USERS_TITLE',
);

?>
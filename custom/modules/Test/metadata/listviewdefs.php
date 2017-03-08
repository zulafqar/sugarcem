<?php
$module_name = 'cm_Test';
$listViewDefs [$module_name] = 
array (
  'TEST NAME' =>
  array (
    'width' => '32%',
    'label' => 'LBL_TEST_NAME',
    'default' => true,
    'link' => true,
  ),

  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>

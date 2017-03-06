<?php
// created: 2017-03-03 11:33:31
$dictionary["cm_custom_module_users"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cm_custom_module_users' => 
    array (
      'lhs_module' => 'cm_custom_module',
      'lhs_table' => 'cm_custom_module',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cm_custom_module_users_c',
      'join_key_lhs' => 'cm_custom_module_userscm_custom_module_ida',
      'join_key_rhs' => 'cm_custom_module_usersusers_idb',
    ),
  ),
  'table' => 'cm_custom_module_users_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cm_custom_module_userscm_custom_module_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cm_custom_module_usersusers_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cm_custom_module_usersspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cm_custom_module_users_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cm_custom_module_userscm_custom_module_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cm_custom_module_users_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cm_custom_module_usersusers_idb',
      ),
    ),
  ),
);
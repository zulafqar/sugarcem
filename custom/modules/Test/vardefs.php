<?php

$dictionary['Test'] = [
    'table' => 'tests',
    'audited'=>true,
    'duplicate_merge'=>true,
    'fields'   => [
        'test_name'  => [
            'required'      => true,
            'type'          => 'varchar',
            'name'          => 'test_name',
            'vname'         => 'LBL_TEST_NAME',
            'len'           => '255',
            'size'          => '20',
            'massupdate'    => 0,
            'no_default'    => false,
            'comments'      => '',
            'help'          => '',
            'importable'    => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited'       => false,
            'reportable'    => true,
            'unified_search' => false,
            'merge_filter'  => 'disabled',
        ],
    ],
    'relationships'=>array (
    ),
    'optimistic_locking'=>true,
    'unified_search'=>true,
];

if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('Test','Test', array('basic','assignable'));
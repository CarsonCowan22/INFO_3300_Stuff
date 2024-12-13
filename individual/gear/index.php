<?php 
session_start();
require '../model/gear_db.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_gear';
    }
}

if ($action == 'list_gear') {
    $inventory = read_inventory();
    $message = '';
    include 'gear_list.php';
} else if ($action == 'add_gear') {
    $gear_categories = get_gear_category();
    include 'gear_add.php';
} else if ($action == 'add_gear_data') {
    $gear_name = filter_input(INPUT_POST, 'gear_name');
    $gear_description = filter_input(INPUT_POST, 'gear_description');
    $gear_category = filter_input(INPUT_POST, 'gear_category');
    $gear_manufacturer = filter_input(INPUT_POST, 'gear_manufacturer');
    $records_added = create_gear($gear_name, $gear_description, $gear_category, $gear_manufacturer);
    $message = $records_added > 0 ? 'Gear Added' : 'Error Adding Gear';
    $inventory = read_inventory();
    include 'gear_list.php';
}
<?php
require 'database.php';

function read_inventory() {
    global $db;
    $query = 'SELECT gear_id,gear_name, gear_description, gear_category, gear_manufacturer
              FROM gear_tracker.gear';
    $statement = $db->prepare($query);
    $statement->execute();
    $inventory = $statement->fetchAll();
    $statement->closeCursor();
    return $inventory;
}

function get_gear_category() {
    global $db;
    $query = 'SELECT DISTINCT gear_category
              FROM gear_tracker.gear';
    $statement = $db->prepare($query);
    $statement->execute();
    $gear_category = $statement->fetchAll();
    $statement->closeCursor();
    return $gear_category;
}

function create_gear($gear_name, $gear_description, $gear_category, $gear_manufacturer) {
    global $db;
    $query = 'INSERT INTO gear(gear_name, gear_description, gear_category, gear_manufacturer)
              VALUES(:gear_name, :gear_description, :gear_category, :gear_manufacturer)';
    $statement = $db->prepare($query);
    $statement->bindParam(':gear_name', $gear_name);
    $statement->bindParam(':gear_description', $gear_description);
    $statement->bindParam(':gear_category', $gear_category);
    $statement->bindParam(':gear_manufacturer', $gear_manufacturer);
    $statement->execute();
    return $statement->rowCount();
}

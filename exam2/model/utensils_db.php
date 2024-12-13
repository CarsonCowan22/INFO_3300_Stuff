<?php
require 'database.php';

function read_utensils() {
    global $db;
    $query = 'SELECT utensil_id, utensil_name, utensil_description, utensil_type, utensil_year_purchased
              FROM cooking.utensils';
    $statement = $db->prepare($query);
    $statement->execute();
    $utensils = $statement->fetchAll();
    $statement->closeCursor();
    return $utensils;
}

function get_utensil_type() {
    global $db;
    $query = 'SELECT DISTINCT utensil_type
              FROM cooking.utensils';
    $statement = $db->prepare($query);
    $statement->execute();
    $utensil_types = $statement->fetchAll();
    $statement->closeCursor();
    return $utensil_types;
}

function create_utensil($utensil_name, $utensil_description, $utensil_type, $utensil_year_purchased) {
    global $db;
    $query = 'INSERT INTO utensils(utensil_name, utensil_description, utensil_type, utensil_year_purchased)
              VALUES(:utensil_name, :utensil_description, :utensil_type, :utensil_year_purchased)';
    $statement = $db->prepare($query);
    $statement->bindParam(':utensil_name', $utensil_name);
    $statement->bindParam(':utensil_description', $utensil_description);
    $statement->bindParam(':utensil_type', $utensil_type);
    $statement->bindParam(':utensil_year_purchased', $utensil_year_purchased);
    $statement->execute();
    return $statement->rowCount();
}
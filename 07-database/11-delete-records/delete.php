<?php
require "database.php";

$isDeleteRequest = $_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['_method'] === 'delete';


if ($isDeleteRequest) {

    //get the values from the form
    $id = $_POST['id'];

    //make query
    $sql = 'DELETE FROM post WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $params = ['id' => $id];

    $stmt->execute($params);

    //redirect to index.php
    header('Location: index.php');
    exit;
}

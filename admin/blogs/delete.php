<?php
include_once('../connection/connection.php');

// take id to delete 
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM blogs WHERE id = ? LIMIT 1");
$stmt->bind_param('i', $id);
$stmt->execute();

header('location:view.php');

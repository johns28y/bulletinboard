<?php
$dsn = 'mysql:host=localhost; dbname=bulletinboard';
$username = 'TyreKing';
$password = 'GoogleScholar1'; 
$connection = new PDO ($bulletinboard, $TyreKing, "GoogleScholar1");
if (!$connection) {
    die('Connection failed', mysql_error());
}
if(isset $_POST['submit']) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $timestamp = date('Y-m-d H:i:s');
    $query = mysql_query("INSERT INTO posts (title, body, date) VALUES ($title, $body, $timestamp)");
    }
mysql_close($connection);
?>


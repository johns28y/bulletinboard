<!DOCTYPE HTML>
<html>  
    <head>
        <link rel = "stylesheet" type = "text/css" href = "styles.css">
        <title>
        Ticket Center
        </title>
    </head>
    <body>
        <div class = "ticket-list">
            <h5>
            Ticket Center
            </h5>
    <form action = "">
       <input type = "button" value = "Find"  onclick = "window.location.href ='ticketportalindex.php';"/>
       <input type = "button" value = "Post" onclick = "window.location.href = 'ticketportalcomposer.php';"/>  
      <input type = "button" value = "Cancel" onclick = "window.location.href = 'ticketcancellation.php';"/>                                               
    </form>
        </div>
   </body>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname = bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO($dsn, $username, $password);
if (!$connection) {
    die('Connection failed' + mysql_error());
}
?>
</html>
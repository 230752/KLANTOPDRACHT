<?php 
include ('../database/db_connect.php');
if($_SESSION['login'] == false) {
    header('location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
</head>
<body>
    <header>
        
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>
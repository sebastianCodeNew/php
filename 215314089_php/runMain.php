<?php
require "function.php";


if (isset($_POST["simpan"])) {
    
    if (tambahdata($_POST) > 0) {
        echo "
        <script>
            alert('Data telah disimpan');
            document.location.href = 'tampiltodolis.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Gagal menyimpan data');
            document.location.href = 'MAIN.PHP';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="style1.css"/>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>To Do List</title>
</head>
<body>
    <h1>To Do List</h1>
    <div class="container">
        <form action="" method="post">
        <input id="inputField" type="text" name="todolist"><button name="simpan">+</button>
        <div class="to-dos" id="toDoContainer">
    </div>
    </form>
    </div>
    <script src="main.js"></script>
</body>
</html>

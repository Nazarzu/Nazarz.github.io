<?php
include( "../PHP/config.php");
if( isset($_GET['IDF']) ){
    $id = $_GET['IDF'];
    $sql = "INSERT INTO selection (Name, Message, Tanggal) SELECT Name,Message,Tanggal FROM feedback where IDF=$id";
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=sukses');
    }
} else {
    die( "Akses dilarang" );
}

?>
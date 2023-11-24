<?php

include("config.php");
if(isset($_POST[ 'submit' ])){
    $Name = $_POST['Name'];
    $Message = $_POST['Message'];
    $tanggal = date('d/m/Y');

    $sql = "INSERT INTO feedback (Name, Message, Tanggal) VALUE ('$Name', '$Message', '$tanggal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../index.php?status=sukses');
    } else {
        header( 'Location: ../index.php?status=gagal' );
    }
} else {
    die( "Akses dilarang..." );
}

?>
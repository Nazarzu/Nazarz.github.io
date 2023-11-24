<?php 

include("config.php");
if(isset($_POST[ 'submit' ])){
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Number = $_POST['Number'];
    $Message = $_POST['Message'];
    $tanggal = date('d/m/Y');

    $sql = "INSERT INTO contact (Name, Email, NOTELP, Message, Tanggal) VALUE ('$Name', '$Email', '$Number', '$Message', '$tanggal')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: ../Contact.php?status=sukses');
    } else {
        header( 'Location: ../Login.php?status=gagal' );
    }
} else {
    die(mysqli_error($db));
}

?>
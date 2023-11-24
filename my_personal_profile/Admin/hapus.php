<?php
include( "../PHP/config.php");
if( isset( $_GET[ 'IDC' ]) ){
    $id = $_GET[ 'IDC' ];
    $sql = "DELETE FROM contact WHERE IDC=$id" ;
    $query = mysqli_query( $db, $sql);
    if( $query ){
    header( 'Location: tables.php' );
    header( 'Location: index.php' );
    } else {
    die( "gagal menghapus..." );
    }
   } else {
    die( "akses dilarang..." );
   }
?>


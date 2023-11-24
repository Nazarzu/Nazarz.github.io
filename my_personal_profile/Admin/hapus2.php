<?php
include( "../PHP/config.php");
if( isset( $_GET[ 'IDF' ]) ){
    $id = $_GET[ 'IDF' ];
    $sql = "DELETE FROM feedback WHERE IDF=$id" ;
    $query = mysqli_query( $db, $sql);
    if( $query ){
    header( 'Location: Feddback.php' );
    header( 'Location: index.php' );
    } else {
    die( "gagal menghapus..." );
    }
   } else {
    die( "akses dilarang..." );
   }
?>


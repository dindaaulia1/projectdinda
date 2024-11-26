<?php
include 'fungsi.php';

if(issert($_POST['aksi'])){

    $berhasil = tambah_data(&_POST, &_FILES);
    
    if($berhasil){
        header ("location: index,php");
    } else {
        echo $berhasil;
    }
} else if ($_POST['aksi'] == "edit"){

    $berhasil = ubah_data($_POST, $_FILES);

    if($berhasil){
        header ("location: index.php");
    } else {
        echo $berhasil;
    }
}
    
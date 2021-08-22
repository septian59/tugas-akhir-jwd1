<?php
include '../koneksi.php';

$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$kategori = $_POST['kategori'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$status = $_POST['status'];

if (isset($_POST['simpan'])) {



    $query =  mysqli_query(
        $db,
        "UPDATE tbbuku
		SET judulbuku='$judul_buku',kategori='$kategori',pengarang='$pengarang',penerbit='$penerbit'
		WHERE idbuku='$id_buku'"
    );

    if ($query) {

        header("location:../index.php?p=buku");
    } else {
        die('gagal menyimpan buku');
    }
}

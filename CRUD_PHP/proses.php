<?php
session_start();
include 'database.php';
$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $foto = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    $folder = "uploads/";

    if (move_uploaded_file($tmp_name, $folder . $foto)) {
        $db->tambahData($nama, $alamat, $nohp, $kelas, $nim, $jenis_kelamin, $foto);
        $_SESSION['message'] = "Data berhasil ditambahkan!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Data gagal ditambahkan!";
        $_SESSION['message_type'] = "danger";
    }
    header("location:index.php");

} elseif ($aksi == 'edit') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    
    if (!empty($_FILES['foto']['name'])) {
        $foto = $_FILES['foto']['name'];
        $tmp_name = $_FILES['foto']['tmp_name'];
        $folder = "uploads/";
        move_uploaded_file($tmp_name, $folder . $foto);
    } else {
        $foto = null;
    }

    $db->updateData($id, $nama, $alamat, $nohp, $kelas, $nim, $jenis_kelamin, $foto);
    $_SESSION['message'] = "Data berhasil diupdate!";
    $_SESSION['message_type'] = "success";
    header("location:index.php");

} elseif ($aksi == "hapus") {
    $db->delete($_GET['id']);
    $_SESSION['message'] = "Data berhasil dihapus!";
    $_SESSION['message_type'] = "success";
    header("location:index.php");
}

<?php
if($_POST){
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $gender=$_POST['gender'];
    $alamat=$_POST['alamat'];
    $id_kelas=$_POST['id_kelas'];
    $username=$_POST['username'];
    $password= $_POST['password'];

    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tampil_siswa.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tampil_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_siswa,tanggal_lahir, gender, alamat, id_kelas, id_jurusan, username, password) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$id_kelas."','".$id_jurusan."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tampil_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tampil_siswa.php';</script>";
        }
    }
}
?>

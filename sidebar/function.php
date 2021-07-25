<?php

session_start();

//membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","sekolah");



    //menambah siswa
    if(isset($_POST['addnewsiswa'])){
        $nis  = $_POST['nis'];
        $nama  = $_POST['nama'];
        $kelas      = $_POST['kelas'];
        
    
        $addtotable = mysqli_query($conn,"insert into siswa(nis, nama, kelas)values('$nis','$nama','$kelas')");
        if($addtotable){
            echo 'berhasil';
            header('location:mastersiswa.php');
    
        }else{
            echo'gagal';
            header('location:mastersiswa.php');
        }
    };  
    
    //menambah mapel
    if(isset($_POST['addnewmapel'])){
        $mapel  = $_POST['nama'];
        $id  = $_POST['id'];
        
    
        $addtotable = mysqli_query($conn,"insert into mapel(nama, id)values('$mapel','$id')");
        if($addtotable){
            echo 'berhasil';
            header('location:mastermapel.php');
    
        }else{
            echo'gagal';
            header('location:mastermapel.php');
        }
    };  

       //menambah guru
       if(isset($_POST['addnewguru'])){
        $nama  = $_POST['nama'];
        $id  = $_POST['id'];
        
    
        $addtotable = mysqli_query($conn,"insert into guru(nama, id)values('$nama','$id')");
        if($addtotable){
            echo 'berhasil';
            header('location:masterguru.php');
    
        }else{
            echo'gagal';
            header('location:masterguru.php');
        }
    };  
    
    

?>
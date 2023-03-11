<?php
$nama =$_POST["nama"];
$pass =$_POST["pass"];

if($nama == 'arifatwa' && $pass == '12355'){
    echo "selamat anda berhasil login";
}else{
    echo "Maaf anda salah memasukkan data";
}



// if(isset($_POST['kirim'])){
//     $nama = $_POST['nama'];
//     $pass = $_POST['pass'];
//     echo "Nama anda $nama";
//     echo "pass anda $pass";
// }

?>
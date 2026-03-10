<?php
class klas_air {
    function koneksi() {
        $koneksi = mysqli_connect("localhost","air","1sampai5","air" );
        return $koneksi;
    }

    function dt_user($sesi_user) 
    {
        $q=mysqli_query($this->koneksi(), "SELECT nama,kota,level FROM user WHERE username = '$sesi_user'");
        $d= mysqli_fetch_row($q);
        return $d;

    }
    
}
?>
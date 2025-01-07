<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return 'Selamat Datang Di Halaman ABOUT';
});

Route::get('/home', function(){
    return 'Selamat Datang Di Halaman HOME';
});

Route::get('/contact', function(){
    return 'Selamat Datang Di Halaman CONTACT';
});



route::get('/siswa', function () {
    $data_siswa = ['eva','vika','isma','naisa'];

    return view('tampil',compact('data_siswa'));
});


//route parameter
Route::get('/tes/{nama2}/{tempatlahir}/{jeniskelamin}/{agama}/{alamat}', function ($nama,$tempatlahir,$jeniskelamin,$agama,$alamat) {
    return "Nama : ".$nama."<br>".
           "Tempat Lahir : ".$tempatlahir."<br>".
           "Jenis Kelamin : ".$jeniskelamin."<br>".
           "Agama : ".$agama."<br>".
           "Alamat : ".$alamat;
});

//route bilangan
Route::get('/hitung/{b1}/{b2}', function ($bilangan1,$bilangan2){
    return "Bilangan 1 : ".$bilangan1."<br>".
           "Bilangan 2 : ".$bilangan2."<br>".
           "Hasil : ".$hasil = $bilangan1 + $bilangan2;
        
});

//LATIHAN

Route::get('/latihan/{nama}/{telepon}/{jenisbarang}/{namabarang}/{pembayaran}/{jumlah}', function($nama,$tlp,$jenisbrg,$namabrg,$pembayaran,$jumlah){
      
    //HP
    if ($jenisbrg == "handphone") {
        if ($namabrg =="poco") {
            $harga = 3000000;
            $total = $harga*$jumlah;
        }elseif($namabrg=="samsung"){
                $harga = 5000000;
                $total = $harga*$jumlah;
        }elseif($namabrg=="iphone"){
            $harga=15000000;
            $total = $harga*$jumlah;
    }else {
        return "Handphone tidak tersedia";
    }

    // Laptop
    }elseif ($jenisbrg == "laptop") {
        if ($namabrg =="lenovo") {
            $harga = 4000000;
            $total = $harga*$jumlah;
        }elseif($namabrg=="acer"){
                $harga =8000000;
                $total = $harga*$jumlah;
        }elseif($namabrg=="macbook"){
            $harga =20000000;
            $total = $harga*$jumlah;
    }else {
        return "laptop tiak tersedia";
    }
    // TV
    }elseif ($jenisbrg == "tv") {
        if ($namabrg =="toshiba") {
            $harga = 5000000;
            $total = $harga*$jumlah;
        }elseif($namabrg=="samsung"){
                $harga =8000000;
                $total = $harga*$jumlah;
        }elseif($namabrg=="lg"){
            $harga =100000000;
            $total = $harga*$jumlah;
    }else {
    return "tv tidak tersedia";
    }
    }else{
        return "jenis barang tidak valid";
    }

    //chasback
    if ($total>=1000000) {
        $chasback = 500000;
    }else {
        $chasback = 0;
    }
    
    if ($pembayaran == "transfer"){
        $potongan = 50000;
    }else{
        $potongan = 0;
    }

    // Total Pembayran

    $total_byr =$total - $chasback -$potongan;

    return "Nama Pembeli : "."$nama"."<br>".
              "Telepon : "."$tlp"."<br>".
              "----------------------------------<br>".
              "Jenis Barang : "."$jenisbrg"."<br>".
              "Nama Barang : "."$namabrg"."<br>".
              "Harga : "."$harga"."<br>".
              "Jumlah : "."$jumlah"."<br>".
              "-----------------------------------<br>".
              "Total :"."$total"."<br>".
              "chasback :"."$chasback"."<br>".
              "pembayaran :"."$pembayaran"."<br>". 
              "potongan :"."$potongan"."<br>". 
              "-----------------------------------<br>".
              "total pembayaran ".$total_byr;
});                 



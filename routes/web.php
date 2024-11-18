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

//route parameter
Route::get('/tes/{nama2}/{tempatlahir}/{jeniskelamin}/{agama}/{alamat}', function ($nama,$tempatlahir,$jeniskelamin,$agama,$alamat) {
    return "Nama : ".$nama."<br>".
           "Tempat Lahir : ".$tempatlahir."<br>".
           "Jenis Kelamin : ".$jeniskelamin."<br>".
           "Agama : ".$agama."<br>".
           "Alamat : ".$alamat;
});

//route bilangan
Route::get('/cek/{b1}/{b2}', function ($bilangan1,$bilangan2){
    return "Bilangan 1 : ".$bilangan1."<br>".
           "Bilangan 2 : ".$bilangan2."<br>".
           "Hasil : ".$hasil = $bilangan1 + $bilangan2;
        
});

//LATIHAN

Route::get('/latihan/{nama}/{telepon}/{jenisbarang}/{namabarang}/{pembayaran}/{jumlah}', function ($nama,$tlp,$jenisbrg,$namabrg,$pembayaran,$jumlah){
      
    //HP
    if ($jenisbrg == "handphone") {
        if ($namabrg =="poco") {
            $harga = 3000000;
        }elseif($namabrg=="samsung"){
                $harga==5000000;
        }elseif($namabrg=="iphone"){
            $harga==15000000;
    }else {
        echo "Handphone tidak tersedia";
    }
    }

    //Laptop
    if ($jenisbrg == "laptop") {
        if ($namabrg =="lenovo") {
            $harga = 4000000;
        }elseif($namabrg=="acer"){
                $harga==8000000;
        }elseif($namabrg=="macbook"){
            $harga==20000000;
    }else {
        echo "laptop tiak tersedia";
    }
    }

    //  TV
    if ($jenisbrg == "tv") {
        if ($namabrg =="toshiba") {
            $harga = 5000000;
        }elseif($namabrg=="samsung"){
                $harga==8000000;
        }elseif($namabrg=="lg"){
            $harga==100000000;
    }else {
        echo "tv tidak tersedia";
    }
    }
    
    
    return "Nama Pembeli : "."$nama"."<br>".
              "Telepon : "."$tlp"."<br>".
              "----------------------------------<br>".
              "Jenis Barang : "."$jenisbrg"."<br>".
              "Nama Barang : "."$namabrg"."<br>".
              "Pembayaran : "."$pembayaran"."<br>".
              "Jumlah : "."$jumlah"."<br>".
              "-----------------------------------<br>";
              "Total :" .$total =  $barang * $jumlah;
       

});


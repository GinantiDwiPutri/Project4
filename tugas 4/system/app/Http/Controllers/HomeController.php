<?php

namespace App\Http\Controllers;

class HomeController extends Controller{


    function showdashboard() {
        return view('admin.dashboard');
    }

    function showkategori() {
        return view('admin.kategori');
    }

    function showproduk() {
        return view('admin.produk');
    }

}
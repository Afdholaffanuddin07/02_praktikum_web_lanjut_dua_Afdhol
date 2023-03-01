<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return '2141720253 Afdhol Affanuddin';
    }
    public function articles($id){
        return 'Halaman ini dengan id  '.$id;
    }
}

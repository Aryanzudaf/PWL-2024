<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index() {
        return 'Selamat datang';
    }

        public function about() {
        return 'About Us';
    }

        public function articles($id) {
        return "Halaman Artikel dengan ID $id";
    }

}

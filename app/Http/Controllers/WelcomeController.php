<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
    }

    public function greeting(){
    return view('blog.hello')
    ->with('name','Ryann')
    ->with('occupation','Astronaut');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPage extends Controller
{
    public function user() {
        return view('user')
        ->with('id', '2141762039')
        ->with('name', 'Andika');
    }
}
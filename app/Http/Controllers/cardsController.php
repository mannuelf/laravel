<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class cardsController extends Controller
{
    public function index()
    {
        return view('cards.index');
    }
}

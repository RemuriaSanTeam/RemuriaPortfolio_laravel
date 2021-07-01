<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContEntry;

class ContEntryController extends Controller
{
    //
    function index(){
        dd(ContEntry::all());
    }
    function create(){
        echo "create";
    }
}

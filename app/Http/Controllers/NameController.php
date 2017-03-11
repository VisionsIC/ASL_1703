<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return array (
            1 => "John",
            2 => "Mary",
            3 => "Steven"
        );
    }
}

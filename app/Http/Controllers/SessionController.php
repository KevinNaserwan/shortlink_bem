<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    function login()
    {
        return view("Shortlink/Login");
    }

    function index()
    {
        return view("Shortlink/index");
    }

    function tambah()
    {
        return view("Shortlink/tambah");
    }

    function detail($id)
    {
        $link = Link::find($id);
        return view("Shortlink/detail", ['linkdetail' => $link]);
    }

    function edit($id)
    {
        $link = Link::find($id);
        return view("Shortlink/edit", ['linkdetail' => $link]);
    }
}

<?php

namespace CodeWeb\Core\Http\Controllers;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function contact()
    {
        return view('admin.contact');
    }
}

<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('threads.index');
    }

    public function store()
    {
        
    }

    public function create()
    {

    }

    public function show(Thread $thread)
    {

    }

    public function update(Thread $thread)
    {

    }

    public function destroy(Thread $thread)
    {
        
    }
}

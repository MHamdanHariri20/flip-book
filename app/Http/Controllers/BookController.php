<?php

namespace App\Http\Controllers;

use App\Models\Bookflip;
use App\Models\Bookflip2;
use App\Models\Bookflip3;
use App\Models\Bookflip4;
use App\Models\Bookflip5;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function homePage()
    {
        return view('User.homepage');
    }

    public function flipbook()
    {
        $book = Bookflip::all();
        return view('User.flipbook', compact('book'));
    }

    public function flipbook2()
    {
        $book = Bookflip2::all();
        return view('User.flipbook2', compact('book'));
    }

    public function flipbook3()
    {
        $book = Bookflip3::all();
        return view('User.flipbook3', compact('book'));
    }

    public function flipbook4()
    {
        $book = Bookflip4::all();
        return view('User.flipbook4', compact('book'));
    }

    public function flipbook5()
    {
        $book = Bookflip5::all();
        return view('User.flipbook5', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\sub_class_book;
use Illuminate\Http\Request;

class SubClassBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
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
    public function show(sub_class_book $sub_class_book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sub_class_book $sub_class_book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sub_class_book $sub_class_book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sub_class_book $sub_class_book)
    {
        //
    }
}

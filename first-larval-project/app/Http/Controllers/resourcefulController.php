<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class resourcefulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Index file";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Create file";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store file";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Show file";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit file";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update file";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Destroy file";
    }
}

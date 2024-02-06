<?php

namespace App\Http\Controllers;

use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index():View
    {
        $appeals = Appeal::query()

            ->orderByDesc('status')
            ->get();
        return view('admin.index' , compact('appeals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Appeal $appeal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appeal $appeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appeal $appeal)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appeal $appeal)
    {


    }
}

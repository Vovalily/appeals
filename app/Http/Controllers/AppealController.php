<?php

namespace App\Http\Controllers;

use App\Enums\AppealEnum;
use App\Models\Appeal;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AppealController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $appeals = Appeal::query()
            ->where('status', AppealEnum::CONFIRM)
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('appeals.index' , compact('appeals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('appeals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Appeal::query()->create([
           'user_name' => $request->user_name,
           'question' => $request->question,
           'status' => AppealEnum::REJECTED->value
        ]);
        return redirect()->route('appeals.index');
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
        $appeal::query()->update([
            'status' => $request->status
        ]);

        return redirect()->route('admins.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appeal $appeal)
    {
        $appeal::query()->delete();

        return redirect()->route('admins.index');
    }
}

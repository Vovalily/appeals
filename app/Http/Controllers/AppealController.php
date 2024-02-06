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
            ->where('status', AppealEnum::CONFIRM->name)
            ->orderByDesc('updated_at')->paginate(5);

        $apeals_fixed = Appeal::query()->where('is_fixed', 1)->get();
        return view('appeals.index' , compact('appeals','apeals_fixed'));
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
           'user_name' => $request->user_name ?? 'Anonymous',
           'question' => $request->question
        ]);
        return redirect()->route('appeals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appeal $appeal):View
    {
        return view('admin.show_appeal', compact('appeal'));
    }

    public function answer(Request $request, Appeal $appeal)
    {

        $appeal->update([
            'answer' => $request->answer,
            'status' => AppealEnum::CONFIRM->name,
            'is_fixed' => isset($request->is_fixed)
        ]);

        return redirect()->route('admin.index');
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
        $appeal->delete();

        return redirect()->route('admin.index');
    }
}

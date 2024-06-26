<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get user_details from the database
        $userDetails = auth()->user()->userDetail()->get();

        return view('user_detail.index', compact('userDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $userDetail = new UserDetail();

        $userDetail->user_id = auth()->id();
        $userDetail->full_name = $request->full_name;
        $userDetail->email = $request->email;
        $userDetail->phone_number = $request->phone_number;
        $userDetail->address = $request->address;
        $userDetail->save();

        return redirect()->route('education.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserDetail $userDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserDetail $userDetail)
    {
        return view('user_detail.edit', compact('userDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserDetail $userDetail)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        // dd($userDetail->update($request->except('_token')));

        $userDetail->update($request->except('_token'));

        return redirect()->route('user-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserDetail $userDetail)
    {
        $userDetail->delete();

        return redirect()->route('user-detail.index');
    }
}

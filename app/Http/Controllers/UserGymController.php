<?php

namespace App\Http\Controllers;

use App\Models\User_gym;
use Illuminate\Http\Request;

class UserGymController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_gyms = User_gym::all();
        return view('user_gyms.index', compact('user_gyms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_gyms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'gym_id' => 'required|exists:gym,id',
        ]);

        User_gym::create($request->all());
        return redirect()->route('user_gyms.index')->with('success', 'User_gym created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User_gym $user_gym)
    {
        return view('user_gyms.show', compact('user_gym'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User_gym $user_gym)
    {
        return view('user_gyms.edit', compact('user_gym'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User_gym $user_gym)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'gym_id' => 'required|exists:gym,id',
        ]);

        $user_gym->update($request->all());
        return redirect()->route('user_gyms.index')->with('success', 'User_gym updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User_gym $user_gym)
    {
        $user_gym->delete();
        return redirect()->route('user_gyms.index')->with('success', 'User_gym deleted successfully.');
    }
}

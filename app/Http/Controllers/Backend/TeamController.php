<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{


    /*
     * Display a listing of the resource.
     */

    public function index()
    {

        $data = Team::get();
        return view('backend.pages.team.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.team.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'photo' => 'required',
            'name' => 'required',
        ], [
            'photo.required' => 'Select a Photo',
            'name.required' => 'Give a Title',
        ]);

        $photo = time() . "_" . $request->photo->getClientOriginalName();
        $request->photo->move(public_path('uploads/pictures/'), $photo);
        $validatedData['photo'] = $photo;

        Team::create($validatedData);
        session()->flash('success', 'Member Information Has Been Created !!');
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit = Team::findOrFail($id);
        return view('backend.pages.team.index', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Give a Title',
        ]);

        if (isset($request->photo)) {
            $photo = time() . "_" . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('uploads/pictures/'), $photo);
            $validatedData['photo'] = $photo;
        }

        Team::find($id)->update($validatedData);
        session()->flash('success', 'Member Information Has Been Updated !!');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Team::find($id)->delete();
        session()->flash('success', 'Member Has Been Deleted !!');
        return back();
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Interior;
use Illuminate\Http\Request;

class InteriorController extends Controller
{


    /*
     * Display a listing of the resource.
     */

    public function index()
    {

        $data = Interior::get();
        return view('backend.pages.interior.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.interior.index');
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

        Interior::create($validatedData);
        session()->flash('success', 'Interior Information Has Been Created !!');
        return redirect()->route('interior.index');
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
        $edit = Interior::findOrFail($id);
        return view('backend.pages.interior.index', compact('edit'));
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

        Interior::find($id)->update($validatedData);
        session()->flash('success', 'Interior Information Has Been Updated !!');
        return redirect()->route('interior.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Interior::find($id)->delete();
        session()->flash('success', 'Interior Has Been Deleted !!');
        return back();
    }
}

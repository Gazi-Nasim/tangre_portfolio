<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Exterior;
use Illuminate\Http\Request;

class ExteriorController extends Controller
{


    /*
     * Display a listing of the resource.
     */

    public function index()
    {

        $data = Exterior::get();
        return view('backend.pages.exterior.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.exterior.index');
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

        Exterior::create($validatedData);
        session()->flash('success', 'Exterior Information Has Been Created !!');
        return redirect()->route('exterior.index');
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
        $edit = Exterior::findOrFail($id);
        return view('backend.pages.exterior.index', compact('edit'));
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

        Exterior::find($id)->update($validatedData);
        session()->flash('success', 'Exterior Information Has Been Updated !!');
        return redirect()->route('exterior.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        Exterior::find($id)->delete();
        session()->flash('success', 'Exterior Has Been Deleted !!');
        return back();
    }
}

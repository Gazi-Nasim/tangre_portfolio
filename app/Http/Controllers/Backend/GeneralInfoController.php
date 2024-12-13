<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $edit = GeneralInfo::first();
        return view('backend.pages.generalinfo.index', compact('edit'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'logo' => 'required',
            'logo_two' => 'required',
            'home_cover_photo' => 'required',
            'home_interior_photo' => 'required',
            'home_exterior_photo' => 'required',
            'home_branding_photo' => 'required',
            'home_exclusive_photo' => 'required',
            'exclusive_cover_photo' => 'required',
            'service_cover_photo' => 'required',
            'interior_cover_photo' => 'required',
            'exterior_cover_photo' => 'required',
            'branding_cover_photo' => 'required',
            'portfolio_cover_photo' => 'required',
            'contact_cover_photo' => 'required',
        ], [
            // 'name.required' => '',
        ]);


        $fileName = time() . "_" . $request->logo->getClientOriginalName();
        $request->logo->move(public_path('uploads/general/'), $fileName);
        $validatedData['logo'] = $fileName;

        $fileName = time() . "_" . $request->logo_two->getClientOriginalName();
        $request->logo_two->move(public_path('uploads/general/'), $fileName);
        $validatedData['logo_two'] = $fileName;

        $fileName = time() . "_" . $request->home_cover_photo->getClientOriginalName();
        $request->home_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['home_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->home_interior_photo->getClientOriginalName();
        $request->home_interior_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['home_interior_photo'] = $fileName;

        $fileName = time() . "_" . $request->home_exterior_photo->getClientOriginalName();
        $request->home_exterior_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['home_exterior_photo'] = $fileName;

        $fileName = time() . "_" . $request->home_branding_photo->getClientOriginalName();
        $request->home_branding_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['home_branding_photo'] = $fileName;

        $fileName = time() . "_" . $request->home_exclusive_photo->getClientOriginalName();
        $request->home_exclusive_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['home_exclusive_photo'] = $fileName;

        $fileName = time() . "_" . $request->exclusive_cover_photo->getClientOriginalName();
        $request->exclusive_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['exclusive_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->service_cover_photo->getClientOriginalName();
        $request->service_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['service_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->interior_cover_photo->getClientOriginalName();
        $request->interior_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['interior_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->exterior_cover_photo->getClientOriginalName();
        $request->exterior_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['exterior_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->branding_cover_photo->getClientOriginalName();
        $request->branding_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['branding_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->portfolio_cover_photo->getClientOriginalName();
        $request->portfolio_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['portfolio_cover_photo'] = $fileName;

        $fileName = time() . "_" . $request->contact_cover_photo->getClientOriginalName();
        $request->contact_cover_photo->move(public_path('uploads/general/'), $fileName);
        $validatedData['contact_cover_photo'] = $fileName;
        // dd($validatedData);
        GeneralInfo::create($validatedData);
        session()->flash('success', 'General Information Has Been Created !!');
        return back();
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
        return response("edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if (isset($request->logo)) {
            $fileName = time() . "_" . $request->logo->getClientOriginalName();
            $request->logo->move(public_path('uploads/general/'), $fileName);
            $validatedData['logo'] = $fileName;
        }

        if (isset($request->logo_tow)) {
            $fileName = time() . "_" . $request->logo_tow->getClientOriginalName();
            $request->logo_tow->move(public_path('uploads/general/'), $fileName);
            $validatedData['logo_tow'] = $fileName;
        }

        if (isset($request->home_cover_photo)) {
            $fileName = time() . "_" . $request->home_cover_photo->getClientOriginalName();
            $request->home_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['home_cover_photo'] = $fileName;
        }

        if (isset($request->home_interior_photo)) {
            $fileName = time() . "_" . $request->home_interior_photo->getClientOriginalName();
            $request->home_interior_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['home_interior_photo'] = $fileName;
        }

        if (isset($request->home_exterior_photo)) {
            $fileName = time() . "_" . $request->home_exterior_photo->getClientOriginalName();
            $request->home_exterior_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['home_exterior_photo'] = $fileName;
        }

        if (isset($request->home_branding_photo)) {
            $fileName = time() . "_" . $request->home_branding_photo->getClientOriginalName();
            $request->home_branding_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['home_branding_photo'] = $fileName;
        }

        if (isset($request->home_exclusive_photo)) {
            $fileName = time() . "_" . $request->home_exclusive_photo->getClientOriginalName();
            $request->home_exclusive_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['home_exclusive_photo'] = $fileName;
        }

        if (isset($request->exclusive_cover_photo)) {
            $fileName = time() . "_" . $request->exclusive_cover_photo->getClientOriginalName();
            $request->exclusive_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['exclusive_cover_photo'] = $fileName;
        }

        if (isset($request->service_cover_photo)) {
            $fileName = time() . "_" . $request->service_cover_photo->getClientOriginalName();
            $request->service_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['service_cover_photo'] = $fileName;
        }

        if (isset($request->interior_cover_photo)) {
            $fileName = time() . "_" . $request->interior_cover_photo->getClientOriginalName();
            $request->interior_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['interior_cover_photo'] = $fileName;
        }

        if (isset($request->exterior_cover_photo)) {
            $fileName = time() . "_" . $request->exterior_cover_photo->getClientOriginalName();
            $request->exterior_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['exterior_cover_photo'] = $fileName;
        }

        if (isset($request->branding_cover_photo)) {
            $fileName = time() . "_" . $request->branding_cover_photo->getClientOriginalName();
            $request->branding_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['branding_cover_photo'] = $fileName;
        }

        if (isset($request->portfolio_cover_photo)) {
            $fileName = time() . "_" . $request->portfolio_cover_photo->getClientOriginalName();
            $request->portfolio_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['portfolio_cover_photo'] = $fileName;
        }

        if (isset($request->contact_cover_photo)) {
            $fileName = time() . "_" . $request->contact_cover_photo->getClientOriginalName();
            $request->contact_cover_photo->move(public_path('uploads/general/'), $fileName);
            $validatedData['contact_cover_photo'] = $fileName;
        }

        GeneralInfo::find($id)->update($validatedData);
        session()->flash('success', 'General Information Has Been Created !!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}

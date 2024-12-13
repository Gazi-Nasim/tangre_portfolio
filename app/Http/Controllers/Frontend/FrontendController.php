<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Branding;
use App\Models\Exterior;

use App\Models\Interior;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getHome()
    {

        return view('frontend_pages.home');
    }

    public function getService()
    {
        $interiors = Interior::select('name', 'photo')->limit(9)->get();
        $exteriors = Exterior::select('name', 'photo')->limit(9)->get();
        $brandings = Branding::select('name', 'photo')->limit(9)->get();
        return view('frontend_pages.portfolio', compact('interiors', 'exteriors', 'brandings'));
    }

    public function getPortfolio()
    {
        return view('frontend_pages.portfolio');
    }

    public function getAbout()
    {
        $members = Team::all();
        return view('frontend_pages.about', compact('members'));
    }

    public function getContact()
    {
        return view('frontend_pages.contact');
    }

    public function getInterior()
    {
        $interiors = Interior::select('name', 'photo')->get();
        return view('frontend_pages.interior', compact('interiors'));
    }

    public function getExterior()
    {
        $exteriors = Exterior::select('name', 'photo')->get();
        return view('frontend_pages.exterior', compact('exteriors'));
    }

    public function getBranding()
    {
        $brandings = Branding::select('name', 'photo')->get();
        return view('frontend_pages.branding', compact('brandings'));
    }

    public function getExclusive()
    {
        return view('frontend_pages.exclusive');
    }
}

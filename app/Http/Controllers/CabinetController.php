<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Illuminate\Http\Request;

class CabinetController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function bookmark()
    {
        return view('points.bookmark');
    }
    public function graffiti()
    {
        return view('points.graffiti');
    }
    public function smokes()
    {
        return view('points.smoke');
    }

    public function setBookmark(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        Points::addPoint($request->all());
        return redirect(route('index'));
    }

    public function setGraffiti(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        Points::addPoint($request->all());
        return redirect(route('index'));
    }

    public function setSmokes(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);

        Points::addPoint($request->all());
        return redirect(route('index'));
    }
}

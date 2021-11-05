<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Brian2694\Toastr\Facades\Toastr;
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
            'bookmarks' => 'required'
        ], [],[
            'address' => 'адрес',
            'video' => 'видео',
            'bookmarks'=> 'отметка на карте'
        ]);

        Points::addPoint($request->all());
        Toastr::success('Ваша заявка успешно отправлена на модерацию', 'Good!', ["positionClass" => "toast-top-right"]);
        return redirect(route('index'));
    }

    public function setGraffiti(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
            'graffiti' => 'required'
        ], [],[
            'address' => 'адрес',
            'video' => 'видео',
            'graffiti' => 'отметка на карте'
        ]);

        Points::addPoint($request->all());
        Toastr::success('Ваша заявка успешно отправлена на модерацию', 'Good!', ["positionClass" => "toast-top-right"]);

        return redirect(route('index'));
    }

    public function setSmokes(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
            'smoking_products' => 'required'
        ], [], [
            'address' => 'адрес',
            'video' => 'видео',
            'smoking_products' => 'отметка на карте'
        ]);

        Points::addPoint($request->all());
        Toastr::success('Ваша заявка успешно отправлена на модерацию', 'Good!', ["positionClass" => "toast-top-right"]);

        return redirect(route('index'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Points;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class MainController extends Controller
{
    public function index()
    {
        $points = Points::with('user')->where('status', 1)->get();
        $bookmarks = [];
        $graffiti = [];
        $smokes = [];
        $users = [];
        $count_bookmark = 0;
        $count_graffiti = 0;
        $count_smoking = 0;
        foreach ($points as $point) {
            if ($point->bookmarks) {
                $count_bookmark++;
                $users['bookmark'][$point->user->login][] = $point;
                $bookmarks[] = $point->bookmarks;
            }
            if ($point->graffiti) {
                $count_graffiti++;
                $users['graffiti'][$point->user->login] = $count_graffiti;
                $graffiti[] = $point->graffiti;
            }
            if ($point->smoking_products) {
                $count_smoking++;
                $users['smoking'][$point->user->login] = $count_smoking;
                $smokes[] = $point->smoking_products;
            }
        }
//        sort($users['bookmark']);
//        dd($users);

        return view('index', compact('bookmarks', 'graffiti', 'smokes'));
    }
}

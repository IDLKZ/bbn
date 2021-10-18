<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Partners;
use App\Models\Points;
use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class MainController extends Controller
{
    public function index()
    {
        $points = Points::with('user')->where('status', 1)->get();
        $users = User::where('role_id', 0)->with('points')->latest()->get();
        $bookmarks = [];
        $graffiti = [];
        $smokes = [];
        $data = [];
        foreach ($points as $point) {
            if ($point->bookmarks) {
//                $users['bookmark'][$point->user->login][] = $point;
                $bookmarks[] = $point->bookmarks;
            }
            if ($point->graffiti) {
//                $users['graffiti'][$point->user->login] = $point;
                $graffiti[] = $point->graffiti;
            }
            if ($point->smoking_products) {
//                $users['smoking'][$point->user->login] = $point;
                $smokes[] = $point->smoking_products;
            }
        }
        foreach ($users as $user) {
            $data[$user->login]['bookmarks'] = 0;
            $data[$user->login]['graffiti'] = 0;
            $data[$user->login]['smokes'] = 0;
            foreach ($user->points as $item) {
                if ($item->status){
                    if ($item->bookmarks){
                        $data[$user->login]['bookmarks']++;
                    }
                    if ($item->graffiti){
                        $data[$user->login]['graffiti']++;
                    }
                    if ($item->smoking_products){
                        $data[$user->login]['smokes']++;
                    }
                }
            }
        }
        array_multisort( array_column($data, "bookmarks"), SORT_DESC, $data );
        $data2 = array_slice($data, 0,4);
        $data = array_slice($data, 0,3);
        $news = News::latest()->take(6)->get();
        $partners = Partners::all();
        return view('index', compact('bookmarks', 'graffiti', 'smokes', 'data', 'data2', 'news', 'partners'));
    }

    public function cmp($a, $b)
    {
        if ($a["bookmarks"] == $b["bookmarks"]) {
            return 0;
        }
        return ($a["bookmarks"] < $b["bookmarks"]) ? -1 : 1;
    }
}

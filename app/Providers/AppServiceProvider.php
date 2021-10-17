<?php

namespace App\Providers;

use App\Models\GetConsultation;
use App\Models\HelpFunds;
use App\Models\InfoDrug;
use App\Models\Points;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.cabinet.header', function($view){
            $graffiti = [];
            $smokes = [];
            if (Auth::user()->role_id != 1){
                $points = Points::where(['user_id' => Auth::id(), 'status' => 1])->get();
                foreach ($points as $point) {
                    if ($point->graffiti) {
                        $graffiti[] = $point->graffiti;
                    }
                    if ($point->smoking_products) {
                        $smokes[] = $point->smoking_products;
                    }
                }
            }
            $view->with('graffiti', $graffiti);
            $view->with('smokes', $smokes);
        });

        view()->composer('layouts.menu', function ($view){
            $view->with('drug', InfoDrug::where('status', 0)->count());
            $view->with('consultation', GetConsultation::where('status', 0)->count());
            $view->with('funds', HelpFunds::where('status', 0)->count());
            $view->with('points', Points::where('status', 0)->count());
        });
    }
}

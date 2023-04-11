<?php

use App\Models\DailyReport;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //dd(\Carbon\Carbon::now()->endOfWeek()->format('Y-m-d H:i'));
    $reports =  DailyReport::orderBy('created_at', 'desc')
    ->whereBetween(
        'created_at', [
            \Carbon\Carbon::now()->startOfWeek()->format('Y-m-d'),
            \Carbon\Carbon::now()->endOfWeek()->format('Y-m-d')
        ]
    )
    ->with('user')
    ->get()
    ->groupBy(function($item, $key){
        return $item->created_at->format('Y-m-d');
    });
    //dd($reports);
    //$user = User::find(1)->loadMissing('daily_reports');

    return view('welcome')->with(compact('reports'));
});

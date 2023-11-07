<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $players = DB::table('players');
        // $players = DB::table('players')->get('*');
        // $players = DB::table('players')->where('age','>',10)->first();

        // $players = DB::table('players')->where('name', 'LIKE', '%2%')->get();

        /* $players = DB::table('players')
        ->where('name', 'LIKE', '%2%')
        ->value('name','age'); */

        /* $players = DB::table('players')
        ->find(6); */

        /* $players = DB::table('players')
        ->pluck('name','age'); */

        /* DB::table('players')
            ->orderBy('id')
            ->chunk(10, function (Collection $players) {
                foreach ($players  as $player) {
                    echo ("<p>Name: {$player->name}</p>");
                }
                return false;
            }); */

        /* DB::table('players')
            ->where('type','Pc Gamer')
            ->lazyById()
            ->each(function(object $player ){
                DB::table('players')
                ->where('id',$player->id)
                ->update(['type'=>'Pc Gamer']);

                echo("<p>Id: {$player->id} | Type: {$player->type}</p>");

            }); */
        /* $players=DB::table('players')
            ->count(); */

        /* $players = DB::table('players')
            ->max('age'); */

        /* $players = DB::table('players')
            ->min('age'); */

        /* $players = DB::table('players')
            ->avg('age'); */

        /* $players = DB::table('players')
            ->sum('age'); */

        /*  $players = DB::table('players')
            ->where('type',2)
            ->count(); */

        // $players = 
        // $value = 2;
        /* if (DB::table('players')->where('type', $value)->exists()) {
            return response()->json(['data' => "There are data with type {$value}"]);
        } else {
            return response()->json(['data' => "There are NO data with type {$value}"]);
        } */

        /* if (DB::table('players')->where('type', $value)->doesntExist()) {
            return response()->json(['data' => "There are NO data with type {$value}"]);
        } else {
            return response()->json(['data' => "There are data with type {$value}"]);
        } */

        $players=DB::table('players')
        ->select('id as IDENTIFICADOR','name as NOMBRE','age as EDAD')
        ->where('type',2)
        ->get();

        /*  */
        // $users = DB::table('users')->get();

        return response()->json(['data' => $players]);
        // return view('players.index', compact('players', 'users'));
    }
}

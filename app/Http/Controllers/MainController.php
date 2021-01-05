<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headlines;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index(){
        $titles = Headlines::all();
        return view("index", compact('titles'));
    }

    function insert(Request $req){
        $title = $req -> input('title');
        $data = new Headlines;
        $data->title = $title;
        $data->save();
        $titles = Headlines::all();
        return redirect("/");
        //return view("index", compact('titles'));

    }

    function logout(){
        Auth::logout();
        return redirect("/");
    }

    public function remove($id) {
        Headlines::where("id", $id)->delete();
        return redirect("/");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class YoutubeController extends Controller
{
    public function index(){
        $videos = DB::select('select * from youtube');
        return view('welcome',['youtube'=>$videos]);
        }
}

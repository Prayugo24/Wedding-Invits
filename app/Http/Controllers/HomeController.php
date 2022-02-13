<?php
namespace App\Http\Controllers;

use Route;
use Config;
use RedisCache;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;

class HomeController extends Controller{

    public function home(Request $request){
        return view('section_1');
    }
}

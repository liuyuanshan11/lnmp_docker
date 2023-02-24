<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function mysql()
    {
        $ret = DB::insert('insert into users (name, age) values (?, ?)', ['Dayle', 18]);
        var_dump($ret);
    }

    public function redis()
    {
        $redis = Redis::connection();
        $redis->set('library', 'predis');
        dd($redis->get('library'));
    }
}

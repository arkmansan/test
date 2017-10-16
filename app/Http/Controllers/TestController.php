<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Formcontroller;
use GuzzleHttp\Client;
class TestController extends Formcontroller
{
    //
    public function test() {
//
        $client = new Client();
        $res = $client->request('GET', 'http://v.juhe.cn/weather/index', [
            'cityname' => ['urlencode("杭州")'],
            'key'=>['510f61dfa18be235c3e55ab041ee3814']
        ]);
        return $res->getBody();
    }
}

<?php

namespace App\Http\Controllers\Tools;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class DemoController extends Controller
{
    public function __invoke()
    {
        $data = Http::get('http://dummy.restapiexample.com/api/v1/employees')->json();

        return response()->json($data);
    }
}

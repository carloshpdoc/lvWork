<?php
/**
 * Created by PhpStorm.
 * User: VBCN
 * Date: 29/06/2016
 * Time: 09:41
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        return view('test/index');
    }

}
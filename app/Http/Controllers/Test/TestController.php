<?php
/**
 * Created by PhpStorm.
 * User: chinwe
 * Date: 2017/12/10
 * Time: 15:59
 */

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller {
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}
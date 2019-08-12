<?php

namespace App\Http\Controllers\admin;

use App\Index;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Model\Aa;

class IndexController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
       
      return view('admin.index');
       
    }

    public function welcome()
    {
       
      return view('admin.welcome');
       
    }


}
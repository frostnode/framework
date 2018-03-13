<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('core::index');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function edit()
    {
        return view('core::edit');
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function settings()
    {
        return view('core::settings');
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
    use Trait\LayoutResolver;

    protected $page = 'services';
    protected $title = 'Serviços';
    protected $data = [];

    public function index()
    {
        return view('admin.services.list');
    }

    public function create()
    {
        return view('admin.services.form');
    }

    public function edit(Request $request)
    {
        return view('admin.services.form');
    }

    public function delete(Request $request)
    {

    }
}

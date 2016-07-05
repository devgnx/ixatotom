<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    use Trait\LayoutResolver;

    protected $page = 'services';
    protected $title = 'Serviços';
    protected $data = [];

    public function edit()
    {
        return view('admin.contact.form');
    }
}

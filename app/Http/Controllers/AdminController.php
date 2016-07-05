<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    use Trait\LayoutResolver;

    protected $page = 'services';
    protected $title = 'Serviços';
    protected $data = [];

    public function login()
    {
        if (Auth::check()) {
          return redirect()->route('admin::services');
        } else {
          return view('admin.login');
        }
    }

    public function auth(Request $request)
    {
        if (Auth::check()) {
          return redirect()->route('admin::services');
        } else if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
            return redirect()->intended('admin::services');
        } else {
            return redirect()->back()->with('errors', ['Email e/ou senha inválidos!']);
        }
    }
}

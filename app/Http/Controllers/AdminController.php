<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\LayoutResolver;

class AdminController extends Controller
{
    use LayoutResolver;

    protected $page  = 'services';
    protected $title = 'Serviços';

    public function login()
    {
        if (Auth::check()) {
          return redirect()->route('admin::service:list');
        } else {
          return view('admin.login');
        }
    }

    public function auth(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('admin::service:list');

        } else if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
            return redirect()->intended('admin::service:list');

        } else {
            return redirect()->back()->with('errors', ['Email e/ou senha inválidos!']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\LayoutResolver;

class AboutController extends Controller
{
    use LayoutResolver;

    protected $page  = 'about';
    protected $title = 'Sobre a Empresa';
    protected $data  = [];

    public function edit()
    {
        $this->data['about'] = About::first();
        return view('admin.about.form', $this->data);
    }

    public function save(Request $request)
    {
        $about = About::firstOrNew(['id' => 1]);
        $about->title = $request->input('title');
        $about->description = $request->input('description');

        if ($about->save()) {
          return redirect()->route('admin::about:edit')->with('success', ["Dados salvos com sucesso!"]);
        }
    }
}

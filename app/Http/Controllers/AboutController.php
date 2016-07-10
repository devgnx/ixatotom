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

    public function edit()
    {
        $this->viewAttributes['about'] = About::first();
        return view('admin.about.form', $this->viewAttributes);
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

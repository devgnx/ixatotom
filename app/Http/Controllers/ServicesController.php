<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\LayoutResolver;

class ServicesController extends Controller
{
    use LayoutResolver;

    protected $page  = 'services';
    protected $title = 'Serviços';
    protected $data  = [];

    public function index(Request $request)
    {
        $this->data['services'] = Service::all();

        if ($this->data['services']->count() >= 3) {
            $request->session()->flash('warning', ["Limite de cadastros atingido!"]);
        }

        return view('admin.services.list', $this->data);
    }

    public function create(Request $request)
    {
        $request->session()->forget('warning');

        if (Service::count() < 3) {
            return view('admin.services.form', $this->data);
        } else {
            return redirect()->route('admin::service:list');
        }
    }

    public function edit(Request $request)
    {
        $request->session()->forget('warning');

        $this->data['service'] = Service::findOrFail($request->route('id'));
        return view('admin.services.form', $this->data);
    }

    public function save(Request $request)
    {
        if ($request->route('id')) {
            $service = Service::findOrFail($request->route('id'));
        } else {
            $service = new Service();
        }

        $service->name = $request->input('name');
        $service->icon = $request->input('icon');
        $service->description = $request->input('description');

        if ($service->save()) {
            return redirect()->route('admin::service:list')->with('success', ["Serviço salvo com sucesso!"]);
        } else {
            return redirect()->back()->withInput()->with('errors', ["Não foi possíval salvar o serviço! Tente novamente"]);
        }
    }

    public function delete($id)
    {
        $service  = Service::findOrFail($id);
        $redirect = redirect()->route('admin::service:list');

        if ($service->delete()) {
            return $redirect->with('success', ["O serviço foi removido com sucesso!"]);
        } else {
            return $redicet->with('errors', ["Não foi possível remover o serviço! Tente novamente."]);
        }
    }
}

@extends('admin.layout')

@section('head')
  <link rel="stylesheet" href="/css/bootstrap-iconpicker.min.css" media="screen">
@endsection

@section('content')
  <div class="container">
    <h1>Serviço</h1>
    <hr>
    <form action="{{ route('admin::service:save', isset($service->id) ? $service->id : null) }}" method="post">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="form-group">
            <label>Icone</label>
            <button type="button" class="btn btn-default" data-icon="{{ $service->icon or old('icon') }}" data-iconset="fontawesome" data-search="false" data-target="#icon" role="iconpicker"></button>
            <input id="icon" name="icon" type="hidden" value="{{ $service->icon or old('icon') }}">
          </div>
          <div class="form-group">
            <label>Titulo</label>
            <input name="name" type="text" class="form-control" value="{{ $service->name or old('name') }}">
          </div>
          <div class="form-group">
            <label>Descrição</label>
            <textarea name="description" class="form-control" rows="4">{{ $service->description or old('description') }}</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-10">
          <a href="{{ route('admin::service:list') }}" class="btn btn-default">Voltar</a>
        </div>
        <div class="col-xs-2 text-right">
          <button class="btn btn-success" type="submit">Salvar</button>
        </div>
      </div>
    </form>
  </div>

@endsection

@section('scripts')
  <script src="/js/iconset-fontawesome-4.3.0.min.js"></script>
  <script src="/js/bootstrap-iconpicker.min.js"></script>
  <script src="/js/services.js"></script>
@endsection

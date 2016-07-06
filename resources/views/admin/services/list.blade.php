@extends('admin.layout')

@section('content')
  <div class="container">
    <h1>Serviços</h1>
    <hr>
    <div class="row">
      <div class="col-xs-12 text-right">
        @if ($services->count() < 3)
          <a href="{{ route('admin::service:create') }}" class="btn btn-primary">Criar novo serviço</a>
        @endif
      </div>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th style="width: 40px;">#</th>
          <th>Nome</th>
          <th style="width: 200px;"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($services as $key => $value)
          <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('admin::service:edit', $value->id) }}">
                <i class="fa fa-pencil"></i> Editar
              </a>
              <a class="btn btn-danger" href="{{ route('admin::service:delete', $value->id) }}">
                <i class="fa fa-trash"></i> Apagar
              </a>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3"><h4 class="text-center">Não há registros.</h4></td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

@endsection

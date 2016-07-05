@extends('admin.layout')

@section('content')
  <form>
    {{ csrf_field() }}

    <div class="form-group">
      <label>Nome</label>
      <input type="text" name="name">
    </div>
    <div class="form-group">
      <label>Icone</label>
      <input type="text" name="icon">
    </div>
    <div class="form-group">
      <label>Descrição</label>
      <textarea name="description"></textarea>
    </div>
  </form>
@endsection

@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card">
      <div class="header">
        <h4 class="title">Usuários</h4>
        <p class="category">Descrição</p>
      </div>
      <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
          <thead>
            <th>ID</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th>Valor</th>
            <th>#</th>
          </thead>
          <tbody>
            @foreach ($users as $users)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->userName }}</td>
              <td>{{ $user->email }}</td>
              <td><a href="./backend/user/edit/{{ $user->id }}">Editar</a> | <a href="./backend/user/delete/{{ $user->id }}">Deletar</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="header">
        <h4 class="title">Dúvidas?</h4>
        <br/>
      </div>
    </div>
  </div>
</div>
@endsection

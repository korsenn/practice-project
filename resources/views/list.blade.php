@extends('layouts.app')

@section('title-block')Список участников@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Список участников</h1>
    </div>
    <table class="table table-bordered">
    <thead class="thead-dark">
    <tr>
      <th scope="col">№</th>
      <th scope="col">Имя Фамилия</th>
      <th scope="col">Организация</th>
      <th scope="col">E-Mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $key => $user)
      <tr>
        <td scope="row">{{ $key + 1 }}</td>
        <td scope="row">{{$user->name}} {{$user->surname}}</td>
        <td scope="row">{{$user->orgname}}</td>

        @if(auth()->user()->id == $user->id)
          <td scope="row" class="p-0">
          <table>
            <tr scope="col">
              <td scope="row" class="border-0">
                {{$user->email}}
              </td>
              <td scope="row" class="border-0">
                <a href="{{ route('edit', Auth::user()->id) }}">Редактировать профиль</a>
              </td>
            </tr scope="col">
          </table> 
          </td>
        @else
        <td scope="row">{{$user->email}}</td>
        @endif 
      </tr>       
    @endforeach
  </tbody>
</table>
</div>


@endsection
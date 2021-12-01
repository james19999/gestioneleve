@extends('layouts.site')
@section('test')
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">Connexion</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">Inscription</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">Disabled</a>
    </li>
  </ul>
@endsection

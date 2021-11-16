@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Liste des classes</h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Tables</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Basic tables </li>
        </ol>
      </nav>
    </div>
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Striped Table</h4>
            <p class="card-description"> <a  class="btn btn-primary" href="{{ route('form') }}">AJOUTER UNE CLAASE</a> <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Numéro</th>
                    <th>Libelle</th>
                    <th>Place</th>
                    <th>Etage</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($classes as $classe)

                  <tr>
                    <td class="py-1">
                      {{ $classe->id }}
                    </td>
                    <td>{{ $classe->libelle }}</td>
                    <td>
                       {{ $classe->place }}
                    </td>

                    <td>{{ $classe->etage }}</td>
                    <td>ok</td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

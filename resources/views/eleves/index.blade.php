@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Liste des élèves</h3>
      <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
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
            <p class="card-description"> <a  class="btn btn-primary" href="{{ route('eleves.create') }}">AJOUTER UN ELEVE</a> <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th>#</th> --}}
                    {{-- <th>Numéro</th> --}}
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date</th>
                    <th>Sexe</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Classe</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($Eleves as $key => $Eleve)
                        
                  <tr>
                      
                    {{-- <td class="py-1">
                      {{ $key++ }}
                    </td> --}}
                    {{-- <td class="py-1">
                      {{ $Eleve->id }}
                    </td> --}}
                    <td>{{ $Eleve->nom }}</td>
                    <td>
                       {{ $Eleve->prenom }}
                    </td>

                    <td>{{ $Eleve->date_naiss }}</td>
                    <td>{{ $Eleve->sexe }}</td>
                    <td>{{ $Eleve->adresse }}</td>
                    <td>{{ $Eleve->tel }}</td>
                    <td>{{ $Eleve->classes->libelle }}</td>
                    <td>

                         <form action="{{ route('eleves.destroy',$Eleve) }}" method="POST"
                           onclick="return confirm('supprimer') "
                         >
                               @csrf
                               @method('DELETE')
                            <button  class="btn btn-danger" >SUPPRIMER</button>
                         </form>

                        </td>
                        <td>
                        <a  class="btn btn-info" href="{{ route('eleves.edit',$Eleve) }}">EDITER</a>

                       </td>
                        <td>
                        <a  class="btn btn-dark" href="{{ route('eleves.show',$Eleve) }}">DETAIL</a>

                       </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

</div>
{{-- {{$Eleves->links()  }} --}}
</div>
@endsection

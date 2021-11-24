@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"></h3>
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
            <p class="card-description"> <a  class="btn btn-primary" href="{{ route('eleves.index') }}">Retour</a> 
            </p>
            <div class="table-responsive">
                   
                     <div class="container" >
                         <div class="card" >
                             <div class="card-header">
                                 DETAILS DE L'ELEVE : {{ $Eleves->id }}
                             </div>
                             <div class="card-body">
                                  <p>Nom: {{ $Eleves->nom }}</p>
                                  <td>
                                    Prénom:   {{ $Eleves->prenom }}
                                 </td>
                                 <p>Date de naissance : {{ $Eleves->date_naiss }}</p>
                                 <p> Sexe: {{ $Eleves->sexe }}</p>
                                 <p> Adresse : {{ $Eleves->adresse }}</p>
                                 <p> Téléphone {{ $Eleves->tel }}</p>
                                 <span class="badge-danger" > Classe {{ $Eleves->classes->libelle }}</span>
                             </div>
                         </div>
                     </div>
                   
                    <td></td>
                    

                  
                    <td>

                  
            </div>
        </div>
    </div>
</div>

</div>
{{-- {{$Eleves->links()  }} --}}
</div>
@endsection

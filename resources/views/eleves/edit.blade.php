@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Modifier un élève </h3>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Forms</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Form elements </li>
        </ol>
      </nav>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Basic form elements</h4>
                <p class="card-description">Basic form elements</p>
                <form  method="POST" action="{{ route('eleves.update',$Eleves) }}" class="forms-sample">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <label for="exampleInputName1">Nom</label>
                    <input name="nom" value="{{ $Eleves->nom }}" type="text" class="form-control  @error('nom') is-invalid @enderror " id="exampleInputName1" placeholder="nom" />
                    @error('nom')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Prénom</label>
                    <input type="text"  name="prenom" value="{{$Eleves->prenom }}" class="form-control @error('prenom') is-invalid @enderror " id="exampleInputEmail3" placeholder=" prenom" />
                    @error('prenom')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Date de Naissance</label>
                    <input  name="date_naiss" value="{{ $Eleves->date_naiss }}" type="date" class="form-control @error('date_naiss') is-invalid @enderror " id="exampleInputPassword4" placeholder="date_naiss" />
                    @error('date_naiss')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Sexe</label>
                     <select class="form-control"  value="{{ $Eleves->sexe }}"  name="sexe" id="exampleInputPassword4">
                         <option value="M">Masculin</option>
                         <option value="F">Féminin</option>
                     </select>
                    @error('sexe')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Adresse</label>
                    <input type="text"  name="adresse" value="{{ $Eleves->adresse }}" class="form-control @error('adresse') is-invalid @enderror " id="exampleInputEmail3" placeholder=" adresse" />
                    @error('adresse')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Téléphone</label>
                    <input type="text"  name="tel" value="{{ $Eleves->tel }}" class="form-control @error('tel') is-invalid @enderror " id="exampleInputEmail3" placeholder=" tel" />
                    @error('tel')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword4">Classe</label>
                     <select class="form-control"  value="{{ old('classe_id') }}"  name="classe_id" id="exampleInputPassword4">
                         <option value="">---Sélectionner la classe de l'élève </option>
                           @foreach($Classes as $Classe)
                               
                           <option value="{{ $Classe->id }}">{{ $Classe->libelle }}</option>
                           @endforeach
                     </select>
                    @error('sexe')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2"> Editer </button>
                   <a   class="btn btn-danger" href="{{ route('index') }}">Annuler</a>
                </form>
              </div>
            </div>
          </div>
  </div>
@endsection

@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Enrégistrer une classe</h3>

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
                <form  method="POST" action="{{ route('store') }}" class="forms-sample">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Libelle</label>
                    <input name="libelle" value="{{ old('libelle') }}" type="text" class="form-control  @error('libelle') is-invalid @enderror " id="exampleInputName1" placeholder="libelle" />
                    @error('libelle')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Place</label>
                    <input type="number"  name="place" value="{{ old('place') }}" class="form-control @error('place') is-invalid @enderror " id="exampleInputEmail3" placeholder="nombre de place" />
                    @error('place')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword4">Etage</label>
                    <input  name="etage" value="{{ old('etage') }}" type="text" class="form-control @error('etage') is-invalid @enderror " id="exampleInputPassword4" placeholder="Etage" />
                    @error('etage')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                  </div>
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                   <a   class="btn btn-danger" href="{{ route('index') }}">Annuler</a>
                </form>
              </div>
            </div>
          </div>
  </div>
@endsection

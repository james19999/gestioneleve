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
                <form  method="POST" action="{{ route('sms') }}" class="forms-sample">
                    @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Libelle</label>
                    <input name="tel" value="{{ old('tel') }}" type="text" class="form-control" id="exampleInputName1" placeholder="number" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Place</label>
                    <input type="text"  name="message" value="{{ old('message') }}" class="form-control" id="exampleInputEmail3" placeholder="message " />
                  </div>
                 
                  <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
  </div>
@endsection

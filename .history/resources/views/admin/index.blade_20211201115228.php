@extends('layouts.master')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Liste des Users</h3>
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
            <p class="card-description"> <a  class="btn btn-primary" href="{{ route('form') }}">AJOUTER UNE CLAASE</a> <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    {{-- <th>#</th> --}}
                    {{-- <th>Numéro</th> --}}
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($Users as $key => $users)

                  <tr>

                    {{-- <td class="py-1">
                      {{ $key++ }}
                    </td> --}}
                    {{-- <td class="py-1">
                      {{ $users->id }}
                    </td> --}}
                    <td>{{ $users->name }}</td>
                    <td>
                       {{ $users->email }}
                    </td>

                    <td>{{ $users->type }}</td>
                    <td>

                         <form action="{{ route('supprimer',$users) }}" method="POST"
                           onclick="return alert('supprimer') "
                         >
                               @csrf
                               @method('DELETE')
                            <button  class="btn btn-danger" >SUPPRIMER</button>
                         </form>

                        </td>
                        <td>
                        <a  class="btn btn-info" href="{{ route('edit',$users) }}">EDITER</a>

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
{{-- {{$Users->links()  }} --}}
</div>
@endsection



@extends('layouts.index')

@section('titol','Cicles')

@section('name')
@if (count($value) > 0)
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sigle</th>
        <th scope="col">Nom</th>
      </tr>
    </thead>
    <tbody>


    @foreach ($value as $key => $ciclo)
      <tr>
        <th scope="row">{{$ciclo -> getId()}}  </th>
        <td> {{$ciclo-> getSigles()}}</td>
        <td>  {{$ciclo -> getNom() }}</td>

        <td>
        <form action="{{action([App\Http\Controllers\CicleController::class,'destroy'],['id' => $key])}}", method="POST">
                @csrf
                @method('delete')
                <button  type="submit" class="btn btn-danger"><i class="bi bi-trash">Esborrar</i></button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>

@else
<div class="alert alert-primary mt-2" role="alert">
    Encara no hi ha cap cicle donat d'alta.
  </div>
@endif


@endsection


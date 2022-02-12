<?php
if($value != null) {
?>

@extends('layouts.index')

@section('titol','Cicles')

@section('name')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sigle</th>
        <th scope="col">Nom</th>
      </tr>
    </thead>
    <tbody>

 <form action="{{action([App\Http\Controllers\CicleController::class,'destroy'],{{$ciclo -> getId()}})}}", method="POST">
    @foreach ($value as $ciclo)
      <tr>
        <th scope="row">{{$ciclo -> getId()}}  </th>
        <td> {{$ciclo-> getSigles()}}</td>
        <td>  {{$ciclo -> getNom() }}</td>
        <td><button type="button" type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i>Esborrar</button>
        </td>

      </tr>
      @endforeach
    </tbody>
</table>
</form>
@endsection
<?php
} else {
?>
@section('name')
<div class="alert alert-primary" role="alert">
    Encara no hi ha cap cicle donat d'alta.
  </div>
@endsection
<?php
}
?>

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

    @foreach ($ciclo as $ciclos)

      <tr>
        <th scope="row">{{$ciclos -> getId()}}  </th>
        <td> {{$ciclos-> getSigles()}}</td>
        <td>  {{$ciclos -> getNom() }}</td>

      </tr>
      @endforeach
    </tbody>
</table>
@endsection

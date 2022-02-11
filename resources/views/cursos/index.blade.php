@extends('layouts.index')

@section('titol','Cursos')

@section('name')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Sigles</th>
        <th scope="col">Nom</th>
        <th scope="col">Cicle</th>
      </tr>
    </thead>
    <tbody>
  @foreach ($cursos as $curso)
      <tr>
        <th scope="row">{{$curso -> getId()}}  </th>
        <td> {{$curso-> getSigles()}}</td>
        <td>  {{$curso -> getNom() }}</td>
        <td>  {{$curso -> getSiglesCicle() }}</td>


      </tr>
      @endforeach
    </tbody>
</table>
@endsection

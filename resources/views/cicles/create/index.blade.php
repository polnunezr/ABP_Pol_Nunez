@extends('layouts.index')
@section('titol','Curso')
@section('name')
<div class="card mt-2">
    <div class="card-header">
      Cicle
    </div>
    <form>
        <div class="form-group">
          <label for="identificador">Identificador</label>
          <input type="number" class="form-control" id="identificador">
        </div>
        <div class="form-group">
            <label for="sigla">Sigla</label>
            <input type="text" class="form-control" id="sigla">
          </div>
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom">
          </div>
          <div class="form-group text-right mt-2 ">
         <button href="url('/cicles')" class="btn btn-secondary float-right">Cancelar</button>
                  <button type="submit" class="btn btn-primary float-right">Aceptar</button>
          </div>
      </form>
  </div>
@endsection

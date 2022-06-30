@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Ajouter une Consultation
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('cars.store') }}">
.         @csrf
          <div class="form-group">
              <label for="consultation">Titre de consultation:</label>
              <input type="text" class="form-control" name="titre"/>
          </div>

          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              <label for="date">Date de la consultation :</label>
              <input type="date" class="form-control" name="prix"/>
          </div>

          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection
@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Titre</td>
          <td>Description</td>
          <td>Date_debut</td>
          <td>date_fin</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>

    <tbody>
        @foreach($consultations as $consultation)
        <tr>
            <td>{{$consultation->id}}</td>
            <td>{{$consultation->titre}}</td>
            <td>{{$consultation->description}}</td>
            <td>{{$consultation->date_debut}}</td>
            <td>{{$consultation->date_fin}}</td>
            <td><a href="{{ route('consultations.edit', $consultation->id)}}" class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('consultations.destroy', $consultation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection
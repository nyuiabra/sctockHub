@extends('layout.app')

@section('content')
<h1>Créer une categorie</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif

<form action="{{ route('categories.store') }}" method="post">
    @csrf

    <label for="name">Nom</label>
    <input type="text" placeholder ="Saisir le nom de la categorie ..." value="{{old('name')}}" id ="name" name="name" />

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5"></textarea>

    <button type="submit">
        soumettre
    </button>


</form>
@endsection
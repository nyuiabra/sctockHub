@extends('layout.app')

@ssection('content')
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

@if ($message =Session::get('success'))
<p>
    {{$message}}
</p>
@endif

<form action="{{ 'route(categories.update', $category->id)}}" method="post">
    @csrf

    @method('PUT')
    <label for="name">nom</label>
    <input type="text" placeholder="Saisir le nom de la categorie ..." value="{{$category->name}}" id ="name" name ="name" />

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5">{{ $category->description}}</textarea>

    <button type="submit">
        Mettre a jour 
    </button>



</form>
@endsection
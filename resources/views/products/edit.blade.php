@extends('layout.app')

@section('content')
<h1>Créer un produit</h1>

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

<form action="{{ route('products.update', $product->id)}}" method="post">
    @csrf

    @method('PUT')
    <label for="name">nom</label>
    <input type="text" placeholder="Saisir le nom de la categorie ..." value="{{$product->name}}" id ="name" name ="name" />

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="30" rows="5">{{ $product->description}}</textarea>
     
    <label for="price">Price</label>
    <input type="text" placeholder ="Saisir le prix..." value="{{old('price')}}" id ="price" name="price" />
    
    <label for="quantity">quantité</label>
    <input type="text" placeholder ="Saisir la quantity..." value="{{old('quantity')}}" id ="quantity" name="quantity" />

    
       <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-select" id="category_id" name="category_id" required>

                    {{-- <option value="">Sélectionner une catégorie</option> --}}
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
    <button type="submit">
        Mettre a jour 
    </button>



</form>
@endsection
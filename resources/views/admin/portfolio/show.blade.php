@extends('layouts.back')

@section('content')
    <h1>Détails sur le portfolio </h1>
    <a href="{{route('porfolio.index')}}" class="btn btn-secondary">retour</a>
    <div class="card mx-auto my-5">
        <div class="card-body">
            <h5 class="card-title">Donée en détail</h5>
            <p class="card-text"> img : {{$portfolios->img}}</p>
            <p class="card-text"> filtre : {{$portfolios->filtre}} </p>
        </div>
        <form action="{{route('porfolio.delete', $portfolios->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
    </div>
@endsection
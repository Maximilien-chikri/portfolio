@extends('layouts.back')

@section('content')
    <h1>portfolio</h1>    
    <a href="{{route('portfolio.index')}}" class="btn btn-primary">retour portfolio</a>

<form action="{{route('portfolio.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="img">image</label>
        <input type="text" class="form-control" id="img" name="img" placeholder="enter img">
    </div>
    <div class="form-group">
        <label for="img">filter</label>
        <input type="text" class="form-control" id="filter" name="filter" placeholder="enter filter">
    </div>
    <button type="submit" class="btn btn-primary">submit</button>
    
</form>

@endsection
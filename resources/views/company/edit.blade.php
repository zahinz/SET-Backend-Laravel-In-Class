@extends('layout.default')
@section('content')
    
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<form action="" method="post">
    @csrf
    <input type="text" name="id" id="" value="{{$company->id}}">
    <input type="text" name="name" id="" value="{{$company->name}}">
    <button type="submit">Edit</button>
</form>

@endsection


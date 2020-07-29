@extends('layout')
@section('content')
<form method="POST" class="fm-inline"
    action="{{route('contact.store')}}">
    @csrf
    @include('contact._form')
    <button class="btn btn-primary btn-block" type="submit">Create</button>
</form>
@endsection

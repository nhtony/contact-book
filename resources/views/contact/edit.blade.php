@extends('layout')
@section('content')
<form method="POST" class="fm-inline"
    action="{{route('contact.update',['contact'=>$contact->id])}}">
    @csrf
    @method('PUT')
    @include('contact._form')
    <button class="btn btn-primary btn-block" type="submit">Update</button>
</form>
@endsection


@extends('layout')
@section('content')
<div class="row justify-content-center">
@forelse($contacts as $contact)
    <div class="col-3 m-3">
        <div class="card text-center contact-item" style="width: 18rem;">
            <div class="card-title">
            <a href="{{route('contact.show',$contact->id)}}"><h3>{{ $contact->name }}</h3></a>
            </div>
            <div class="card-body text-left">
               <p>Phone: {{ $contact->phone }}</p>
               <p>Email: {{ $contact->email }}</p>
               <p>Address: {{ $contact->address }}</p>
               <div class="d-flex justify-content-around">
                <a class="btn btn-primary" href="{{ route('contact.edit',['contact'=>$contact->id]) }}">Edit</a>
                <form method="POST"
                    action="{{ route('contact.destroy',['contact'=>$contact->id]) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
               </div>
            </div>
        </div>
    </div>
@empty
    <p>No contacts yet!</p>
@endforelse
@endsection

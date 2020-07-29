@extends('layout')
@section('content')
 <div  class="d-flex justify-content-center">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h1>{{$contact->name}}</h1>
            <p>Phone: {{$contact->phone}}</p>
            <p>Email: {{$contact->email}}</p>
            <p>Address: {{$contact->address}}</p>
            <p>Added {{$contact->created_at->diffForHumans()}}</p>
            @if ((new Carbon\Carbon())->diffInMinutes($contact->created_at) < 5)
                <p>New!</p>
            @endif
        </div>
    </div>
 </div>
@endsection


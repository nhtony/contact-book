<div class="form-group">
    <label>Name</label>
    <input type="text" name="name"
    value="{{old('name',$contact->name ?? null)}}" class="form-control">
</div>
<div class="form-group">
    <label>Phone</label>
    <input type="text" name="phone"
    value="{{old('phone',$contact->phone ?? null)}}" class="form-control">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" name="email"
    value="{{old('email',$contact->email ?? null)}}" class="form-control">
</div>
<div class="form-group">
    <label>Address</label>
    <input type="text" name="address"
    value="{{old('address',$contact->address ?? null)}}" class="form-control">
</div>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

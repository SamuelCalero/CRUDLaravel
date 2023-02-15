<div class="d-flex justify-content-center">
    <h1>{{ $modo }} costumer</h1></div>
    @if (count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
       
    @endif

    <div class="mb-1 ps-4">
    <label for="name" class="col-sm col-form-label">Name</label>
    <div class="col-sm-11">
    <input type="text" class="form-control" name="name" id="name" value="{{ isset($cliente->name)?$cliente->name:old('Name') }}">
    </div>
    </div>
    <div class="mb-1 ps-4">
    <label for="telephone" class="col-sm col-form-label">Telephone</label>
    <div class="col-sm-11">
    <input type="number" class="form-control" name="telephone" id="telephone" value="{{ isset($cliente->telephone)?$cliente->telephone:old('Telephone') }}">
</div></div>
<div class="mb-1 ps-4">
    <label for="email" class="col-sm col-form-label">email</label>
    <div class="col-sm-11">
    <input type="email" class="form-control" name="email" id="email" value="{{ isset($cliente->email)?$cliente->email:old('email')}}">
</div></div>
<div class="mb-1 ps-4">
    <label for="address" class="col-sm col-form-label">address</label>
    <div class="col-sm-11">
    <input type="text" class="form-control" name="address" id="address" value="{{isset($cliente->address)?$cliente->address:old('address') }}">
</div></div>

<div class="row ps-3">
    <div class="col-sm-4 mb-1 ps-4">
        <label for="gender" class="col-sm col-form-label">gender</label>
    <div class="col-sm">
    <input type="text" class="form-control" name="gender" id="gender" value="{{isset($cliente->gender)?$cliente->gender:old('gender') }}">
</div>
    </div>
    <div class="col-sm-3 mb-1 ps-4">
        <label class="col-sm col-form-label">Age</label>
        <div class="col-sm">
            <input type="number" class="form-control" name="age" id="age" value="{{isset($cliente->age)?$cliente->age:old('age') }}">
        </div>
    </div>
    <div class="col-sm-4 mb-1 ps-4">
        <label class="col-sm col-form-label">DUI</label>
        <div class="col-sm">
            <input type="number" class="form-control" name="dui" id="dui" value="{{isset($cliente->dui)?$cliente->dui:old('dui') }}">
        </div>
    </div>
    </div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center pt-4">
    <input type="submit" value="{{ $modo }} data" class="btn btn-success">
    <a href="{{ url('/cliente/')}}" class="btn btn-secondary">Return</a>
</div>
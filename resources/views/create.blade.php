@extends('layout')
@section('content')

<div class="card mt-5">
  <div class="card-header">
    CREATE USER DATABASE
  </div>

  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
      <form enctype="multipart/form-data" method="post" action="{{ route('administrations.store') }}">
      <div class="form-group">
              @csrf
              <label for="name">Name</label>
              <input type="text" class="form-control" placeholder="Name" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email"/>
          </div>
          <div class="form-group">
              <label for="contact">Contact</label>
              <input type="tel" class="form-control"placeholder="Contact" name="contact"/>
          </div>
          <div class="form-group">
              <label for="address">Address</label>
              <input type="tel" class="form-control" placeholder="Address" name="address"/>
          </div>
          <br>               
          <div class="form-group row">
            <div class="col-sm-6 offset-sm-0">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
      </form>
  </div>
</div>
</div>
@endsection
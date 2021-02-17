@extends('layout')

@section('content')

<div class="mt-5">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
  <title>Bootstrap 4 Linked List Group with Custom Content</title>
  <style>
    table{
    	margin: 20px;
    }
    .right{
      text-align : right;
    }
</style>

<table class="table table-striped table-light">

    <thead>
    
        <tr class="thead-dark">
        
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
         
        </tr>
    </thead>
    <div class="right">
    <a  href="{{ url('/admin')}}" class="btn btn-secondary">Back</a>
    </div>
    <div>
    <a style="margin: 19px;" href="{{ route('administrations.create')}}" class="btn btn-primary">New Users</a>
    
    </div> 
    
   
    
      
    <tbody>
        @foreach($administration as $administration)
        <tr>
            <td>{{$administration->id}}</td>
            <td>{{$administration->name}}</td>
            <td>{{$administration->email}}</td>
            <td>{{$administration->contact}}</td>
            <td>{{$administration->address}}</td> 
            <td class="text-center">
                <a href="{{ route('administrations.edit', $administration->id)}}" class="btn btn-success btn-sm">Edit</a>
            
                <a href="{{ route('administrations.show', $administration->id)}}" class="btn btn-success btn-sm">Show</a>
                
                <form action="{{ route('administrations.destroy', $administration->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"  type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
    <footer>
        <div class="row">
            <div class="col-md-6">
                <p>Copyright &copy; 2021 W2S Solutions</p>
            </div>
@endsection
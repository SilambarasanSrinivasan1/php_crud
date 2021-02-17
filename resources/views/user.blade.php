@extends('layouts.auth')

@section('content')
<style>
h1{
    font-family: sans-serif;
    color:Purple;
}
table, td, th {
    border: 1px solid #cf3708;
}
</style>
<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-info sm-9">
 
        <a href="#" class="navbar-brand mr-9">USER PORTAL</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ml">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="https://www.roberthalf.com.au/employers/administration/administrator-jobs#:~:text=An%20Administrator%20provides%20office%20support,spreadsheets%20and%20presentations%2C%20and%20filing." target=_blank class="nav-item nav-link active">Services</a>
                <a href="#" class="nav-item nav-link active">About</a>
               
            </div>
            
            
            <div class="navbar-nav ml-auto">

                <a href="{{ url('/register/user')}}" class="nav-item nav-link active">User Register </a>
                <!-- <a href="#" class="nav-item nav-link">Logout</a> -->
                <a class="nav-item nav-link active" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
            </div>
        </div>
    </div>    
</nav>
<div class="container">
<div class="jumbotron">
        <h1>Welcome to User Portal</h1><br>
        <a href="{{ route('administrations.index')}}" class="btn btn-info btn-lg">Index Page</a>
        
    </div>

        </div>
        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>
    @endsection
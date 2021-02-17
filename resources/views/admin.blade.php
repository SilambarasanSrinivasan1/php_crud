@extends('layouts.auth')

@section('content')

<div class="container">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark lg-12">
 
        <a href="#" class="navbar-brand  " height ="30" >ADMIN PORTAL</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <nav class="nav nav-tabs">
                <a href="#" class="nav-item nav-link active"><i class="fa fa-home"></i> Home</a>
                <a href="https://www.roberthalf.com.au/employers/administration/administrator-jobs#:~:text=An%20Administrator%20provides%20office%20support,spreadsheets%20and%20presentations%2C%20and%20filing." target=_blank class="nav-item nav-link active"><i class="fa fa-bookmark"></i> Services</a>
                
            </div>
            
            
            <div class="navbar-nav ml-auto">
           

                <a href="{{ url('/admin')}}" class="nav-item nav-link active"><i class="fa fa-amazon"></i> Admin Register </a>
                <a href="{{ url('/register/user')}}" class="nav-item nav-link active"><i class="fa fa-user"></i> User Register </a>
                <!-- <a href="#" class="nav-item nav-link">Logout</a> -->
            
                                    <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
                                    
                                    
            </div>
        </div>
    </div>    
</nav>
<div class="container">
    <div class="jumbotron p-10">
        <h1>Welcome to Admin Portal</h1><br>
        <a href="{{ route('administrations.index')}}" class="btn btn-info btn-lg">Index Page</a>
        
    </div>
    <div class="card text-left mt-3">
    <div class="card text-white" style="width: 350px;">
        
        <div class="card-img-overlay">
            <h5 class="card-title">SILAMBARASAN SRINIVASAN</h5>
            <p class="card-text">Silambarasan is a freelance web designer and developer based in Chennai. He is specialized in HTML5, CSS3, JavaScript, Bootstrap, etc.</p>
            <a href="#" class="btn btn-primary stretched-link">View Profile</a>
        </div>
        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>
    @endsection
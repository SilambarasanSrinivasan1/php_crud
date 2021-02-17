@extends('layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Look! I'm CRUDding</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

</head>
<style>

a {
	padding: 15px;
    font-size: 18px;
    text-align: left;
    background: #dbdfe5;
    margin-bottom: 15px;
 }
</style>
<body>

 
<div class="container">

<nav class="navbar navbar">
	<div class="navbar-header">
		<a href="{{ route('administrations.index', $administration->id) }}" class="btn btn-primary btn-lg active">Back to index Page</a>
	</div>
	<ul class="nav navbar-nav">
	<form method="get" action="{{ route('administrations.show', $administration->id) }}">
</nav>
<div class="text-uppercase">
<h1>RECORD OF {{ $administration->name }}</h1>
</div>
	<div class="jumbotron ">
        <strong>Name:</strong> {{ $administration->name }}<br>
		<strong>Email:</strong> {{ $administration->email }}<br>
		<strong>Contact:</strong> {{ $administration->contact}}<br>
        <strong>Address:</strong> {{ $administration->address}}
	</div>
	

</div>
</body>
</html>
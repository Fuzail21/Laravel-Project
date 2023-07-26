<!doctype html>
<html lang="en">
  <head>
    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">\ <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{url('/')}}">
      @if(session()->has('user_name'))
         {{session()->get('user_name')}}
      @else
         Guest
      @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{ url('/greeting') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/customer/create') }}">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/customer-form') }}">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About Us</a>
        </li>
      </ul>

    </div>
    <button class="text-center btn btn-outline-dark btn-success " style="margin-right: 20px;" ><a style="color: white; text-decoration: none;" href="{{ url('/customer/create') }}"> Add</button></a>
  </nav>



  <style>

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: black;
    }
  </style>
  </head>
  <body>

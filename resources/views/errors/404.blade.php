@extends('layouts.master')

@section('title', 'Page Not Found')    
@section('content')
  <section style="padding-top:100px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
          <h1 style="font-size:162px;">404</h1>
          <h2>Page Not Found</h2>
          <p>Sorry, Page not exists. Please go back to homepage</p>
          <a href="/" class="btn btn-primary">Visit Homepage</a>
        </div>
      </div>
    </div>
  </section>
@endsection


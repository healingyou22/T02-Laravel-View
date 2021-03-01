@extends('layout.navbar')

@section('title', 'Home')
    
@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">This is Counting Page</h1>
      
      @for ($i = 0; $i < 10; $i++)
      The current value is {{ $i }} <br>
      @endfor

    </div>
  </div>
</div>
@endsection
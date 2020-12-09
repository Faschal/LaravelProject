@include('headers')
<h1>Test Blade</h1>

@php
    $name = 'John Doe';
    $fruits = array('mango', 'apple', 'banana', 'grape');
    $age = 38;
@endphp


<h2>{{ $name }}</h2>

<h2>Fruits</h2>

@foreach ($fruits as $fruit)
    <ul>
      <li>{{ $fruit }}</li>
    </ul>
@endforeach

<br>

{{ $age > 18 ? 'You are adult' : 'You are not adult' }}
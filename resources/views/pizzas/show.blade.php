@extends('layouts.layout')
@section('content')


<div style="font-family: Arial, sans-serif; font-size: 16px; text-align:center">
    <p style="font-weight: bold; margin-bottom: 5px;">Name:</p>
    <p>{{ $pizza->name }}</p>

<p style="font-weight: bold; margin-bottom: 5px;">Type:</p>
<p>{{ $pizza->type }}</p>

<p style="font-weight: bold; margin-bottom: 5px;">Size:</p>
<p>{{ $pizza->size }}</p>

<p style="font-weight: bold; margin-bottom: 5px;">Toppings:</p>
<ul style="list-style-type: none; padding-left: 0;">
    @foreach( $pizza->toppings as $topping)
        <li style="margin-bottom: 5px;">{{ $topping }}</li>
    @endforeach
</ul>
<form action="/pizzas/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete the order</button>
</form>
</div>

@endsection
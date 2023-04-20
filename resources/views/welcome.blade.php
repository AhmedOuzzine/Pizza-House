@extends('layouts.app')
@section('content')

<p class="thanks-message">{{ session('mssg') }} </p>

<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/logo.png" alt="pizza house logo" >
        <div class="title m-b-md">
            The Best Pizzas 
        </div>
        <a href="/pizzas/create">ORDER A PIZZA </a> <br>
        <!-- <a href="/pizzas">VIEW ORDERS</a>    -->
    </div>
</div>

@endsection

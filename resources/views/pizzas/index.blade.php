@extends('layouts.app')
@section('content')
<p class="thanks-message">{{session('msg')}}</p>
<div class="flex-center position-ref full-height">
    
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Toppings</th>
                    <th>Specific Instructions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pizzas as $pizza)  <!--  $pizzas is the key passed in the route file -->
                    <tr>
                        <td><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></td>
                        <td>{{ $pizza->type }}</td>
                        <td>{{ $pizza->size }}</td>
                        <td>
                            @foreach( $pizza->toppings as $topping )
                                {{ $topping }} 
                            @endforeach
                        </td>
                        <td>{{ $pizza->special_instructions}}</td>
                    </tr>
                @endforeach
        </table>
            <!-- query parameteres -->
            <!-- {{ $name }}
            </br>
            {{ $age }} -->
    </div>
</div>

@endsection

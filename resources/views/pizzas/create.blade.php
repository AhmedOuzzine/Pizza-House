@extends('layouts.layout')
@section('content')
<br>
<form action="/pizzas" method="POST">
    @csrf
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>
  <br>
  <label for="pizza-type">Pizza Type:</label>
  <select id="pizza-type" name="pizza-type" required>
    <option value="">Select a pizza type</option>
    <option value="margherita">Margherita</option>
    <option value="pepperoni">Pepperoni</option>
    <option value="vegetarian">Vegetarian</option>
    <option value="hawaiian">Hawaiian</option>
  </select>
  <br>
  <label for="size">Size:</label>
  <input type="radio" id="small" name="size" value="small" required>
  <label for="small">Small</label>
  <input type="radio" id="medium" name="size" value="medium" required>
  <label for="medium">Medium</label>
  <input type="radio" id="large" name="size" value="large" required>
  <label for="large">Large</label>
  <br>
  <label for="toppings">Toppings:</label>
  <input type="checkbox" id="cheese" name="toppings[]" value="cheese">
  <label for="cheese">Cheese</label>
  <input type="checkbox" id="mushrooms" name="toppings[]" value="mushrooms">
  <label for="mushrooms">Mushrooms</label>
  <input type="checkbox" id="peppers" name="toppings[]" value="peppers">
  <label for="peppers">Peppers</label>
  <br>
  <label for="instructions">Special Instructions:</label>
  <textarea id="instructions" name="instructions" rows="4"></textarea>
  <br>
  <input type="submit" value="Order">
</form>

@endsection

<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // index and show are naming conventions
    public function index(){
        // query Parameters
        $name = request('name');
        $age = request('age');
    
        // $listpizzas = [
        //     ['type' => 'cheesy pizza', 'price' => 10],
        //     ['type' => 'crusty pizza', 'price' => 8], 
        //     ['type' => 'hot pizza', 'price' => 12]
        // ];

        $listpizzas = Pizza::all();
    
        return view('pizzas.index', [ 
            'pizzas' => $listpizzas,
            'name' => $name, 
            'age' => $age
        ]); 
        // to access $data in the view we use double curly braces     
    }


    public function show( $id ){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', [ 'pizza' => $pizza ]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name'); 
        $pizza->size = request('size');
        $pizza->type = request('pizza-type');
        $pizza->toppings = request('toppings');
        $pizza->special_instructions = request('instructions');

        // foreach($toppings as $topping){
        //     if($topping == "mushrooms"){
        //         $pizza->mushrooms = true;
        //     }elseif($topping == "peppers"){
        //         $pizza->peppers = true;
        //     }elseif($topping == "cheese"){
        //         $pizza->cheese = true;
        //     }
        // }

        $pizza->save();
              
        // error_log($pizza) //log the variable in the terminal

        return redirect('/')->with('mssg', "Your pizza is successfully ordered"); //passing mssg to 'welcome' in order to input it

    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas')->with("msg", "Order successfully completed");
    }
}

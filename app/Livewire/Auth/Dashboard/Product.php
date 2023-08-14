<?php

namespace App\Livewire\Auth\Dashboard;

use App\Livewire\Forms\ProductForm;
use Illuminate\Support\Facades\Route;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Product extends Component
{



    public $products = [];


    // #[Layout('layouts.auth')]
    public function render()
    {
        $this->products = $this->getAllProducts();

        // dd($this->products);
        return view('livewire.auth.dashboard.product');
    }


    public function getAllProducts(){
        $query =  Product::all();
        return  $query['products'];
    }

    public function deleteProduct(){

    }


}

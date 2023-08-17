<?php

namespace App\Livewire\Auth\Dashboard\Products;


use App\Livewire\Forms\ProductForm;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{

    use WithFileUploads;

    public ProductForm $productForm;


    public function render()
    {
        return view('livewire.auth.dashboard.products.add-product');
    }


    public function saveProduct(){


        $this->validate();
       $result = Product::create(
            $this->productForm->all()
        );

        // dump($result);



    }


    public function updateProduct(){

    }



    public function resetProductForm(){

    }


}

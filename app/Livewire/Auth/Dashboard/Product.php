<?php

namespace App\Livewire\Auth\Dashboard;

use App\Models\Product as ModelsProduct;

use Livewire\Component;
use Livewire\WithPagination;

class Product extends Component
{


    use WithPagination;



    public function render()
    {
        return view('livewire.auth.dashboard.product',[
            'products' => ModelsProduct::paginate(5)
        ]);
    }



    public function deleteProduct($id)
    {

        try {
            Product::find($id)->delete();

            $this->dispatch('alert', [
                'type' => 'success',
                'message' => "Product added Successfully!!",
            ]);

        } catch (\Throwable $th) {

            dd($th);

            $this->dispatch('alert', [
                'type' => 'error',
                'message' => "Product not deleted!!",
            ]);
        }

    }



}

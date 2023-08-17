<?php

namespace App\Livewire\Auth\Dashboard\Products;


use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProduct extends Component
{

    use WithFileUploads;
    public $product_id;
    public $operationType = 'add';



    public ProductForm $productForm;

    public function render()
    {
        return view('livewire.auth.dashboard.products.add-product',[

            'categories' => Category::all(),
            'suppliers' => Supplier::all()
        ]);
    }







    public function submit(){
        if($this->operationType == 'add'){
            $this->saveProduct();
        }else{
            $this->updateProduct();
        }
    }

    public function saveProduct()
    {

       $this->validate();
       $value =  $this->productForm->image->store('product/images');

       $this->productForm->image = $value;


        Product::create($this->productForm->all());

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Product added Successfully!!",
        ]);

        return $this->redirect('/products');


    }



    // #[On('category-edit')]
    // public function edit($id)
    // {
    //     $cat = ModelsCategory::find($id);
    //     $this->category_id = $cat->id;
    //     $this->name = $cat->name;
    //     $this->description = $cat->description;
    //     $this->operationType = 'edit';
    // }

    public function updateProduct()
    {
        $this->validate();

        $prod = Product::find($this->product_id);
        $prod->update($this->productForm->all());


        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Product updated Successfully!!",
        ]);


        $this->resetInputFields();

    }





    private function resetInputFields()
    {
        $this->resetValidation();
        $this->productForm->reset();
    }








}

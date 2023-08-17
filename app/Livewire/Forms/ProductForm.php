<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ProductForm extends Form
{

    // #[Rule('required|unique:products|min:5')]

    #[Rule('required|min:5')]
    public $name = '';

    #[Rule('required|min:10')]
    public $description = '';

    #[Rule('required|numeric|gt:0')]
    public $price = 0.0;

    #[Rule('required|numeric|gt:0')]
    public $stock_quantity = 0;

    // #[Rule('required|exists:categories,id')]
    #[Rule('required')]
    public $category_id = null;

    // #[Rule('required|exists:suppliers,id')]
    #[Rule('required')]
    public $supplier_id = null;


    #[Rule('required|image|max:1024')]
    public $image = null;


}

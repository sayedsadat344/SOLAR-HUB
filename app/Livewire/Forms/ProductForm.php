<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class ProductForm extends Form
{


    #[Rule('required|min:5')]
    public $name = '';

    #[Rule('required|min:5')]
    public $description = '';

    #[Rule('required|min:5')]
    public $price = 0.0;

    #[Rule('required|min:5')]
    public $stock_quantity = null;

    #[Rule('required|min:5')]
    public $category_id = null;

    #[Rule('required|min:5')]
    public $supplier_id = null;


}

<?php

namespace App\Livewire\Auth\Dashboard;

use App\Models\Category as ModelsCategory;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Category extends Component
{
    #[Rule('required|min:5')]
    public $name = '';
    public $description;

    public function render()
    {
        return view('livewire.auth.dashboard.category',['categories' => ModelsCategory::all()]);
    }


    public function saveCategory()
    {


        $this->validate();


        ModelsCategory::create([
            'name' => $this->name,
            'description' => $this->description
        ]);

        session()->flash('message', 'Category Created Successfully.');

        $this->resetInputFields();
        $this->dispatch('closeModal', 'addEditCategory');

        // $this->emit('userStore'); // Close model to using to jquery

    }

    private function resetInputFields(){
        $this->name = '';
        $this->description = '';
    }



}

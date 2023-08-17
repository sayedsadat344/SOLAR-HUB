<?php

namespace App\Livewire\Auth\Dashboard;

use App\Models\Category as ModelsCategory;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Category extends Component
{


    use WithPagination;

    #[Rule('required|min:5')]
    public $name = '';
    public $description;
    public $category_id;
    public $operationType = 'add';

    public function render()
    {
        return view('livewire.auth.dashboard.category', ['categories' => ModelsCategory::paginate(10)]);
    }




    public function submit(){
        if($this->operationType == 'add'){
            $this->saveCategory();
        }else{
            $this->updateCategory();
        }
    }

    public function saveCategory()
    {

        $this->validate();

        ModelsCategory::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);


        $this->dispatch('closeModal', 'addEditCategory');

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Category added Successfully!!",
        ]);

        $this->resetInputFields();


    }



    #[On('category-edit')]
    public function edit($id)
    {
        $cat = ModelsCategory::find($id);
        $this->category_id = $cat->id;
        $this->name = $cat->name;
        $this->description = $cat->description;
        $this->operationType = 'edit';
    }

    public function updateCategory()
    {
        $this->validate();

        $cat = ModelsCategory::find($this->category_id);
        $cat->update([
            'name' => $this->name,
            'description' => $this->description,
        ]);


        $this->dispatch('closeModal', 'addEditCategory');

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Category updated Successfully!!",
        ]);


        $this->resetInputFields();

    }


    #[On('category-deleted')]
    public function deleteCategory($id)
    {

        try {
            ModelsCategory::find($id)->delete();

            $this->dispatch('alert', [
                'type' => 'success',
                'message' => "Category added Successfully!!",
            ]);

        } catch (\Throwable $th) {

            dd($th);

            $this->dispatch('alert', [
                'type' => 'error',
                'message' => "Category not deleted!!",
            ]);
        }

    }


    private function resetInputFields()
    {
        $this->name = '';
        $this->description = '';
        $this->category_id = null;
        $this->operationType = 'add';
    }





}

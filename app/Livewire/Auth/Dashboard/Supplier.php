<?php

namespace App\Livewire\Auth\Dashboard;

use App\Models\Supplier as ModelsSupplier;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class Supplier extends Component
{








    use WithPagination;

    #[Rule('required|min:5')]
    public $name = '';
    public $email = '';
    public $phone = '';
    public $address = '';
    public $operationType = 'add';
    public $supplier_id = null;

    public function render()
    {
        return view('livewire.auth.dashboard.supplier',['suppliers' => ModelsSupplier::paginate(5)]);
    }




    public function submit(){
        if($this->operationType == 'add'){
            $this->saveSuppliar();
        }else{
            $this->updateSupplier();
        }
    }

    public function saveSuppliar()
    {

        $this->validate();

        ModelsSupplier::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);


        $this->dispatch('closeModal', 'addEditSupplier');

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Supplier added Successfully!!",
        ]);

        $this->resetInputFields();


    }



    #[On('supplier-edit')]
    public function edit($id)
    {
        $sup = ModelsSupplier::find($id);
        $this->supplier_id = $sup->id;
        $this->name = $sup->name;
        $this->email = $sup->email;
        $this->phone = $sup->phone;
        $this->address = $sup->address;
        $this->operationType = 'edit';
    }

    public function updateSupplier()
    {
        $this->validate();

        $sup = ModelsSupplier::find($this->supplier_id);
        $sup->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
        ]);


        $this->dispatch('closeModal', 'addEditSupplier');

        $this->dispatch('alert', [
            'type' => 'success',
            'message' => "Supplier updated Successfully!!",
        ]);


        $this->resetInputFields();

    }


    #[On('supplier-deleted')]
    public function deleteSupplier($id)
    {

        try {
            ModelsSupplier::find($id)->delete();

            $this->dispatch('alert', [
                'type' => 'success',
                'message' => "Supplier added Successfully!!",
            ]);

        } catch (\Throwable $th) {

            dd($th);

            $this->dispatch('alert', [
                'type' => 'error',
                'message' => "Supplier not deleted!!",
            ]);
        }

    }


    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';

        $this->phone = '';
        $this->address = '';

        $this->supplier_id = null;
        $this->operationType = 'add';
    }
}

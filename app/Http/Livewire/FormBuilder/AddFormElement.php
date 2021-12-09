<?php

namespace App\Http\Livewire\FormBuilder;

use Livewire\Component;


class AddFormElement extends Component
{
    public $data = null;
    protected $rules = [
        'data.label' => 'required',
    ];
    protected $messages  = [
        'data.label.required' => 'Nama Element tidak boleh kosong',
    ];

    
    public function mount()
    {
        $this->data = [
            'type'=>'text',
            'name'=>'name#'.date('mdyhis'),
            'label'=>null,
            'value'=>null,
            'colForm'=>12,
            'required'=>false,
            'placeholder'=>null
        ];
    }

 

    public function render()
    {
        return view('livewire.form-builder.add-form-element');
    }

    public function addFormElement()
    {
        $this->validate();

        $this->emit('addNewFormElement',$this->data);
        $this->emit('closeModalAdd');
        $this->data = [
            'type'=>'text',
            'name'=>'name#'.date('mdyhis'),
            'label'=>null,
            'value'=>null,
            'colForm'=>12,
            'required'=>false,
            'placeholder'=>null
        ];
    }

}

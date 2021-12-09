<?php

namespace App\Http\Livewire\FormBuilder;

use Livewire\Component;

class ListFormElement extends Component
{
    protected $listeners = [
        'resetActiveList' => 'resetActiveList',
        'setActiveList'=>'setActiveList',
        'addNewFormElement'=>'addNewFormElement',
        'updateList'=>'updateList',
    ];
    public $activeListKey = null;
    
    public $list = [
        [
            'type'=>'text',
            'name'=>'name',
            'label'=>'Test',
            'value'=>null,
            'colForm'=>12,
            'required'=>false,
            'placeholder'=>'Enter Test'
        ],        
    ];


    public function render()
    {
        return view('livewire.form-builder.list-form-element');
    }
    public function setActiveList($key, $data)
    {
        $this->activeListKey = $key;
    }
    public function resetActiveList()
    {
        $this->activeListKey = null;
        $this->activeListData = null; 
    }
    public function addNewFormElement($data)
    {
        array_push($this->list,$data);
    }
    public function updateList($key, $data)
    {
        $this->list[$key] = $data;
    }
    public function toUp($key)
    {
        if($key === $this->activeListKey){
            $this->activeListKey = $key-1;
        }else if($key-1 === $this->activeListKey){
            $this->activeListKey = $key;
        }

        $data = $this->list[$key-1];
        $this->list[$key-1] = $this->list[$key];
        $this->list[$key] = $data; 
    }
    public function toDown($key)
    {
        if($key === $this->activeListKey){
            $this->activeListKey = $key+1;
        }else if($key+1 === $this->activeListKey){
            $this->activeListKey = $key;
        }


        $data = $this->list[$key+1];
        $this->list[$key+1] = $this->list[$key];
        $this->list[$key] = $data;  
    }
}

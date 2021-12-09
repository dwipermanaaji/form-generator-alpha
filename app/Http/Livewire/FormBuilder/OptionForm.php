<?php

namespace App\Http\Livewire\FormBuilder;

use Livewire\Component;
use Crypt;
use Exception;

class OptionForm extends Component
{
    public $activeListKey = null;
    public $activeListData = null;
    


    protected $listeners = [
        'resetActiveList' => 'resetActiveList',
        'setActiveList'=>'setActiveList'
    ];
    
    public function render()
    {
        return view('livewire.form-builder.option-form');
    }
 
    public function setActiveList($key, $data)
    {
        try {
            $data = Crypt::decrypt($data);
            $this->activeListKey = $key;
            $this->activeListData = $data;
        } catch (\Exception $e) {
            
        }
    }
    public function resetActiveList()
    {
        $this->activeListKey = null;
        $this->activeListData = null;       
    }
    public function updatedActiveListData($value)
    {
        $this->emitTo('form-builder.list-form-element','updateList',$this->activeListKey,$this->activeListData);
    }
}

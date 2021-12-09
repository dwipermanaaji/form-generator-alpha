<?php

namespace App\Http\Livewire\FormBuilder;

use Livewire\Component;
use Crypt;
use Exception;

class OptionForm extends Component
{
    public $activeListKey = null;
    public $activeListData = null;
    public $foo;
    public $renderKeyActiveList = '';


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
            $this->renderKeyActiveList();
        } catch (\Exception $e) {
            
        }
    }

    public function renderKeyActiveList()
    {
        $text = '';
        foreach ($this->activeListData as $key => $value) {
            $text = $text.'activeListData.'.$key.', ';
        }

        $this->renderKeyActiveList = $text;
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
    public function sendEmitResetList()
    {
        $this->activeListKey = null;
        $this->activeListData = null;        
        $this->emit('resetActiveList');
    }
}

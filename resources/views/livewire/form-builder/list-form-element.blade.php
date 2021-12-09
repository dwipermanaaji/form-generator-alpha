<div class="formBody row" >
    @foreach ($list as $key=> $item)
        <div 
            wire:click.stop="$emit('setActiveList',{{$key}},'{{ \Crypt::encrypt($list[$key]) }}')" 
            wire:key="form-{{$key}}" 
            class="formInput col-{{$item['colForm']}} form-group {{ $activeListKey === $key ? 'active' : '' }}" 
        >
            <label for="{{$item['name']}}" class="{{$item['required'] ? 'required' : ''}}">{{$item['label']}}</label>
            <input 
                type="text" 
                class="form-control"
                value="{{$item['value']}}"
                id="{{$item['name']}}" 
                placeholder="{{$item['placeholder']}}"
            >
            <div class="optionFormInpout d-flex">
                <div class="d-flex flex-column mt-auto mb-auto">
                    @if ($key !== 0)
                        <button class=" btn btn-sm btn-primary mb-1 mx-auto" wire:click.stop="toUp({{$key}})">UP</button>
                    @endif
                    @if (count($list)-1 !== $key)
                        <button class=" btn btn-sm btn-primary mx-auto"  wire:click.stop="toDown({{$key}})">Down</button>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    @livewire('form-builder.add-form-element')
    @php
        echo '<pre>';
        print_r($list);
    @endphp   
</div>

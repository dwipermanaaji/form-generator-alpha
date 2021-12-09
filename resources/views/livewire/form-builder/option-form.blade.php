<div class="col-4 optionForm" wire:click.stop="" style="display: {{$activeListKey !== null ? 'block' : 'none'}}">
    <div class="bodyOption m-0 p-0">
        <div class="row m-0 p-3"  wire:loading.remove wire:target="sendEmitResetList, {{ $renderKeyActiveList }}">
            <div class="col-12 d-flex" >
                <button 
                    wire:dirty.class="disabled" 
                    wire:target="{{ $renderKeyActiveList }}"  
                    class="btn btn-danger ml-auto btnCloseOption" 
                    wire:click.stop="sendEmitResetList()"
                >
                    Close
                </button>
            </div>
            <div class="col-12 form-group">
                <label for="">Name Field Label</label>
                <input type="text" class="form-control" wire:model.lazy="activeListData.label">
            </div>
            <div class="col-12 form-group">
                <label for="">Placeholder</label>
                <input type="text" class="form-control" wire:model.lazy="activeListData.placeholder">
            </div>
            <div class="col-12 form-group">
                <label for="">Value</label>
                <input type="text" class="form-control" wire:model.lazy="activeListData.value">
            </div>
            <div class="col-12 form-group p-0">
                <div class="col-sm-2">Validation</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" wire:model.lazy="activeListData.required" type="checkbox" id="required">
                    <label class="form-check-label" for="required">
                      required
                    </label>
                  </div>
                </div>
            </div>

            <div class="col-12">
                {{$activeListKey}}
                @php
                    echo '<pre>';
                    print_r($activeListData);
                @endphp                
            </div>
        </div>
        <div class="loadingBar" wire:loading wire:target="sendEmitResetList, {{ $renderKeyActiveList }}">
            Waiting...
        </div>        
    </div>

</div>

@push('scripts')
    <script>
    
    </script>
@endpush
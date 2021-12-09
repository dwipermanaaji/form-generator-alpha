<div class="col-4 optionForm" wire:click.stop="" style="display: {{$activeListKey !== null ? 'block' : 'none'}}">
    <div class="bodyOption m-0 p-0">
        <div class="row p-3">
            <div class="col-12 d-flex" >
                <button class="btn btn-danger ml-auto btnCloseOption" wire:click.stop="$emit('resetActiveList')">
                Close
                </button>
            </div>
            <div class="col-12 form-group">
                <label for="">Name Field Label</label>
                <input type="text" class="form-control" wire:model="activeListData.label">
            </div>
            <div class="col-12 form-group">
                <label for="">Placeholder</label>
                <input type="text" class="form-control" wire:model="activeListData.placeholder">
            </div>
            <div class="col-12 form-group">
                <label for="">Value</label>
                <input type="text" class="form-control" wire:model="activeListData.value">
            </div>
            <div class="col-12 form-group p-0">
                <div class="col-sm-2">Validation</div>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" wire:model="activeListData.required" type="checkbox" id="required">
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
    </div>

</div>

@push('scripts')
    <script>
    
    </script>
@endpush
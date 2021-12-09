<div class="formAdd col-12  d-flex ">
    <a href="#" wire:click.stop="$emit('showModalAdd')" data-toggle="modal" data-target="#exampleModal" class="d-flex justify-content-center" >
        <div class="align-self-center">Add Form Elemnt</div>                
    </a>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Form Element</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body row">
                    <div class="col-12 form-group">
                        <label for="">Nama Element</label>
                        <input 
                            wire:model="data.label"
                            type="text" 
                            name="label" 
                            class="form-control" 
                            placeholder="Masukan Nama Element"
                        >
                        @error('data.label') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12 form-group">
                        <label for="">Type Element</label>
                        <select wire:model="data.type" name="type" class="form-control">
                            <option value="text">Text</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" wire:loading.remove class="btn btn-primary" wire:click.stop="addFormElement">Add</button>
                    <button type="button" wire:loading wire:target="addFormElement" class="btn btn-primary">Wait...</button>
                </div>
            </div>
        </div>
    </div>  
</div>

@push('scripts')
    <script>
        window.livewire.on('closeModalAdd', () => 
        {
            $('#exampleModal').modal('hide');
        }); 

        window.livewire.on('showModalAdd', () => 
        {
            $('#exampleModal').modal('show');
        }); 
    </script>
@endpush    
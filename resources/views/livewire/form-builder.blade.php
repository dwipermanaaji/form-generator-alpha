<div class="container-fluid" >
    <div class="row" >
        <div class="col-6 ml-auto mr-auto mainForm mt-5" wire:click.stop="">
            <form action="">
                <div class="formHeader d-flex flex-column">
                    <div class="mt-auto mb-auto">
                    <div class="header">Form Header</div>
                    <div class="subHeader">form generator is a builder form</div>
                    </div>
                </div>
                @livewire('form-builder.list-form-element')
            </form>
        </div>
        @livewire('form-builder.option-form')
    </div>
</div>
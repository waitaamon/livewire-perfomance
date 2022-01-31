<div>
    <form wire:submit.prevent="createEmployee">

        <div>
            <input type="text" wire:model.defer="name"> {{ $name }}
        </div>

        <button type="submit">Submit</button>
    </form>
</div>

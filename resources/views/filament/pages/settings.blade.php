<x-filament::page>
    <form wire:submit.prevent="save" wire:keydown.enter="save">
        <div class="mb-4">
            {{ $this->form }}
        </div>

        <x-filament::button wire:click="save" type="button">
            Kaydet
        </x-filament::button>

    </form>
</x-filament::page>
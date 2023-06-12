<div>
    <form wire:submit.prevent="saveIndustris" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($industris as $i => $industri)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="nama{{ $i }}" label='Nama Industri {{ $i + 1 }}' />
                    <x-form-input id="nama{{ $i }}" name="nama{{ $i }}" wire:model.defer="industris.{{ $i }}.nama" placeholder="Nama Industri"/>
                    <x-form-error key="industris.{{ $i }}.nama" />
                </div>
                <div class="mb-3">
                    <x-form-label id="lokasi{{ $i }}" label='Lokasi Industri {{ $i + 1 }}' />
                    <x-form-input id="lokasi{{ $i }}" name="lokasi{{ $i }}" wire:model.defer="industris.{{ $i }}.lokasi" placeholder="Lokasi Industri"/>
                    <x-form-error key="industris.{{ $i }}.lokasi" />
                </div>
                <div class="mb-3">
                    <x-form-label id="deskripsi{{ $i }}" label='Deskripsi Industri{{ $i + 1 }}' />
                    <textarea id="deskripsi{{ $i }}" name="deskripsi{{ $i }}" class="form-control"
                        wire:model.defer="industris.{{ $i }}.deskripsi" placeholder="Deskripsi Industri"></textarea>
                    <x-form-error key="industris{{ $i }}.deskripsi" />
                </div>
                <div class="mb-3">
                    <x-form-label id="kebutuhan{{ $i }}" label='Kebutuhan Industri{{ $i + 1 }}' />
                    <x-form-input id="kebutuhan{{ $i }}" name="kebutuhan{{ $i }}" wire:model.defer="industris.{{ $i }}.kebutuhan" placeholder="Verifikasi tim industri"/>
                    <x-form-error key="industris.{{ $i }}.kebutuhan" />
                </div>
            </div>
            @if ($i > 0)
            <button class="btn btn-sm btn-danger mt-2" wire:click="removeIndustriInput({{ $i }})"
                wire:target="removeIndustriInput({{ $i }})" type="button" wire:loading.attr="disabled">Hapus</button>
            @endif
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
            <button class="btn btn-light" type="button" wire:click="addIndustriInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
        </div>
    </form>
</div>

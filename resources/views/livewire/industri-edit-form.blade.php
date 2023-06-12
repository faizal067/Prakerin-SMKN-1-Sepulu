<div>
    <form wire:submit.prevent="saveIndustris" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($industris as $i => $industri)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="nama{{ $i }}" label='Nama Industri ({{ $i + 1 }})' />
                    <x-form-input id="nama{{ $i }}" name="nama{{ $i }}" wire:model.defer="industris.{{ $i }}.nama" />
                    <x-form-error key="industris.{{ $i }}.nama" />
                </div>
                <div class="mb-3">
                    <x-form-label id="lokasi{{ $i }}" label='Lokasi Industri ({{ $i + 1 }})' />
                    <textarea id="lokasi{{ $i }}" name="lokasi{{ $i }}" class="form-control"
                        wire:model.defer="industris.{{ $i }}.lokasi"></textarea>
                    <x-form-error key="industris.{{ $i }}.lokasi" />
                </div>
                <div class="mb-3">
                    <x-form-label id="deskripsi{{ $i }}" label='Deskripsi Industri ({{ $i + 1 }})' />
                    <textarea id="deskripsi{{ $i }}" name="deskripsi{{ $i }}" class="form-control"
                        wire:model.defer="industris.{{ $i }}.deskripsi"></textarea>
                    <x-form-error key="industris.{{ $i }}.deskripsi" />
                </div>
                <div class="mb-3">
                    <x-form-label id="kebutuhan{{ $i }}" label='Kebutuhan INdustri ({{ $i + 1 }})' />
                    <textarea id="kebutuhan{{ $i }}" name="kebutuhan{{ $i }}" class="form-control"
                        wire:model.defer="industris.{{ $i }}.kebutuhan"></textarea>
                    <x-form-error key="industris.{{ $i }}.kebutuhan" />
                </div>
            </div>
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>
</div>
<div>
    <form wire:submit.prevent="saveLaporans" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($laporans as $i => $laporan)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="kegiatan{{ $i }}" label='Nama Kegiatan({{ $i + 1 }})' />
                    <x-form-input id="kegiatan{{ $i }}" name="kegiatan{{ $i }}" wire:model.defer="laporans.{{ $i }}.kegiatan" />
                    <x-form-error key="laporans.{{ $i }}.kegiatan" />
                </div>
                <div class="mb-3">
                    <x-form-label id="rincian{{ $i }}" label='Rincian Kegiatan ({{ $i + 1 }})' />
                    <textarea id="rincian{{ $i }}" name="rincian{{ $i }}" class="form-control"
                        wire:model.defer="laporans.{{ $i }}.rincian"></textarea>
                    <x-form-error key="laporans.{{ $i }}.rincian" />
                </div>
                <div class="mb-3">
                    <x-form-label id="tglkegiatan{{ $i }}" label='Tanggal Kegiatan ({{ $i + 1 }})' />
                    <x-form-input type="date" id="tglkegiatan{{ $i }}" name="tglkegiatan{{ $i }}" class="form-control"
                        wire:model.defer="laporans.{{ $i }}.tglkegiatan" />
                    <small class="text-muted d-block mt-2">Perhatikan format tanggal d (Hari), m (Bulan) dan y
                        (Tahun)</small>
                    <x-form-error key="laporans.{{ $i }}.tglkegiatan" />
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
<div>
    <form wire:submit.prevent="saveLaporans" method="post" novalidate>
        @include('partials.alerts')
        @foreach ($laporans as $i => $laporan)
        <div class="mb-3">
            <div class="w-100">
                <div class="mb-3">
                    <x-form-label id="kegiatan{{ $i }}" label='Nama Kegiatan {{ $i + 1 }}' />
                    <x-form-input id="kegiatan{{ $i }}" name="kegiatan{{ $i }}" wire:model.defer="laporans.{{ $i }}.kegiatan" placeholder="Nama Kegiatan"/>
                    <x-form-error key="laporans.{{ $i }}.kegiatan" />
                </div>
                <div class="mb-3">
                    <x-form-label id="rincian{{ $i }}" label='Keterangan{{ $i + 1 }}' />
                    <textarea id="rincian{{ $i }}" name="rincian{{ $i }}" class="form-control"
                        wire:model.defer="laporans.{{ $i }}.rincian" placeholder="Rincian kegiatan selama prakerin......"></textarea>
                    <x-form-error key="laporan.rincian" />
                </div>
                <div class="mb-3">
                    <x-form-label id="tglkegiatan{{ $i }}" label='Tanggal Hari Libur ({{ $i + 1 }})' />
                    <x-form-input type="date" id="tglkegiatan{{ $i }}" name="tglkegiatan{{ $i }}" class="form-control"
                        wire:model.defer="laporans.{{ $i }}.tglkegiatan" />
                    <small class="text-muted d-block mt-2">Perhatikan format tanggal d (Hari), m (Bulan) dan y
                        (Tahun)</small>
                    <x-form-error key="laporans.{{ $i }}.tglkegiatan" />
                </div>
            </div>
            @if ($i > 0)
            <button class="btn btn-sm btn-danger mt-2" wire:click="removeLaporanInput({{ $i }})"
                wire:target="removeLaporanInput({{ $i }})" type="button" wire:loading.attr="disabled">Hapus</button>
            @endif
        </div>
        <hr>
        @endforeach

        <div class="d-flex justify-content-between align-items-center mb-5">
            <button class="btn btn-primary">
                Simpan
            </button>
            <button class="btn btn-light" type="button" wire:click="addLaporanInput" wire:loading.attr="disabled">
                Tambah Input
            </button>
        </div>
    </form>
</div>
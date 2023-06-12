<?php

namespace App\Http\Livewire;

use App\Models\Laporan;
use Livewire\Component;

class LaporanCreateForm extends Component
{
    public $laporans;
    private $initialValue = ['kegiatan' => '', 'rincian' => '', 'tglkegiatan' => ''];

    public function mount()
    {
        $this->laporans = [$this->initialValue];
    }

    public function addLaporanInput(): void
    {
        $this->laporans[] = $this->initialValue;
    }

    public function removeLaporanInput(int $index): void
    {
        unset($this->laporans[$index]);
        $this->laporans = array_values($this->laporans);
    }

    public function saveLaporans()
    {
        $this->validate([
            'laporans.*.kegiatan' => 'required',
            'laporans.*.rincian' => 'required',
            'laporans.*.tglkegiatan' => 'required|date|unique:laporans',
        ]);

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($this->laporans as $laporan) {
            Laporan::create($laporan);
        }

        redirect()->route('laporans.index')->with('success', 'Data laporan berhasil ditambahkan.');
    }

    public function render()
    {
        return view('livewire.laporan-create-form');
    }
}

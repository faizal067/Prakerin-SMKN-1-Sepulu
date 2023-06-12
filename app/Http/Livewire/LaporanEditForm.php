<?php

namespace App\Http\Livewire;

use App\Http\Traits\useUniqueValidation;
use App\Models\Laporan;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class LaporanEditForm extends Component
{
    use useUniqueValidation;

    public $laporans;

    public function mount(Collection $laporans)
    {
        $this->laporans = [];
        foreach ($laporans as $laporan) {
            // $this->laporans[] = $laporan->toArray(); // jika menggunakan ini akan terjadi bandwith yang cukup besar
            $this->laporans[] = [
                'id' => $laporan->id,
                'kegiatan' => $laporan->kegiatan,
                'rincian' => $laporan->rincian,
                'tglkegiatan' => $laporan->tglkegiatan,
            ];
        }
    }

    public function saveLaporans()
    {
        $this->validate([
            'laporans.*.kegiatan' => 'required',
            'laporans.*.rincian' => 'required',
            'laporans.*.tglkegiatan' => 'required|date',
        ]);

        if (!$this->isUniqueOnLocal('tglkegiatan', $this->laporans)) {
            $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
            return session()->flash('failed', 'Pastikan tanggal laporan tidak boleh sama dengan tanggal laporan yang lain.');
        }

        $affected = 0;
        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($this->laporans as $laporan) {
            $laporanBeforeUpdated = Laporan::find($laporan['id']);

            if (!$this->isUniqueOnDatabase($laporanBeforeUpdated, $laporan, 'tglkegiatan', Laporan::class)) {
                $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
                return session()->flash('failed', "Tanggal laporan {$laporan['id']} sudah terdaftar. Silahkan masukan tanggal laporan yang berbeda!");
            }

            $affected += $laporanBeforeUpdated->update([
                'kegiatan' => $laporan['kegiatan'],
                'rincian' => $laporan['rincian'],
                'tglkegiatan' => $laporan['tglkegiatan'],
            ]);
        }

        $message = $affected === 0 ?
            "Tidak ada data laporan yang diubah." :
            "Ada $affected data laporan yang berhasil diedit.";

        return redirect()->route('laporans.index')->with('success', $message);
    }

    public function render()
    {
        return view('livewire.laporan-edit-form');
    }
}

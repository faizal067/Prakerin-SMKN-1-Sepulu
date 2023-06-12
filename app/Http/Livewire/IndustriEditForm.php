<?php

namespace App\Http\Livewire;

use App\Http\Traits\useUniqueValidation;
use App\Models\Industri;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class IndustriEditForm extends Component
{
    use useUniqueValidation;

    public $industris;

    public function mount(Collection $industris)
    {
        $this->industris = [];
        foreach ($industris as $industri) {
            // $this->industris[] = $industri->toArray(); // jika menggunakan ini akan terjadi bandwith yang cukup besar
            $this->industris[] = [
                'id' => $industri->id,
                'nama' => $industri->nama,
                'lokasi' => $industri->lokasi,
                'deskripsi' => $industri->deskripsi,
                'kebutuhan' => $industri->kebutuhan,
            ];
        }
    }

    public function saveIndustris()
    {
        $this->validate([
            'industris.*.nama' => 'required',
            'industris.*.lokasi' => 'required',
            'industris.*.deskripsi' => 'required',
            'industris.*.kebutuhan' => 'required',
        ]);

        $affected = 0;
        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($this->industris as $industri) {
            $industriBeforeUpdated = Industri::find($industri['id']);

            $affected += $industriBeforeUpdated->update([
                'nama' => $industri['nama'],
                'lokasi' => $industri['lokasi'],
                'deskripsi' => $industri['deskripsi'],
                'kebutuhan' => $industri['kebutuhan'],
            ]);
        }

        $message = $affected === 0 ?
            "Tidak ada data industri yang diubah." :
            "Ada $affected data industri yang berhasil diedit.";

        return redirect()->route('industris.index')->with('success', $message);
    }

    public function render()
    {
        return view('livewire.industri-edit-form');
    }
}

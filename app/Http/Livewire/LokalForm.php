<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LokalForm extends Component
{
    public $lokal;

    protected $rules = [
        'lokal.user_id' => 'auth()->user()->id',
        'lokal.tglkegiatan' => 'required|date',
        'lokal.kegiatan' => 'required|string|max:250',
        'lokal.rincian' => 'required|string|max:500',
        'lokal.foto' => 'required|string|max:100mb',

    ];

    public function save()
    {
        $this->validate();

        Lokal::create([
            "user_id" => auth()->user()->id,
            "tglkegiatan" => $this->lokal['tglkegiatan'],
            "kegiatan" => $this->lokal['kegiatan'],
            "rincian" => $this->lokal['rincian'],
            "foto" => $this->lokal['foto'],
        ]);

        return redirect()->route('logbooks.lokal', $this->employeeId)->with('success', 'Permintaan pengajuan laporan prakerin sedang diproses. Silahkan tunggu...');
    }
    public function render()
    {
        return view('livewire.lokal-form');
    }
}

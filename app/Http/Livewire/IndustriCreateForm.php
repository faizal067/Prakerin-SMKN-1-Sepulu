<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Industri;

class IndustriCreateForm extends Component
{
    public $industris;
    private $initialValue = ['nama' => '', 'lokasi' => '', 'deskripsi' => '', 'kebutuhan' => ''];

    public function mount()
    {
        $this->industris = [$this->initialValue];
    }

    public function addIndustriInput(): void
    {
        $this->industris[] = $this->initialValue;
    }

    public function removeIndustriInput(int $index): void
    {
        unset($this->industris[$index]);
        $this->industris = array_values($this->industris);
    }

    public function saveIndustris()
    {
        $this->validate([
            'industris.*.nama' => 'required|min:3',
            'industris.*.lokasi' => 'required',
            'industris.*.deskripsi' => 'required|max:5000',
            'industris.*.kebutuhan' => 'required',
        ]);

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($this->industris as $industri) {
            Industri::create($industri);
        }

        redirect()->route('industris.index')->with('success', 'Data industri berhasil ditambahkan.');
    }

    public function render()
    {
        return view('livewire.industri-create-form');
    }
}

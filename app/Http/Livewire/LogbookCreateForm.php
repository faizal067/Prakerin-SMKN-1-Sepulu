<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Logbook;
use Livewire\Component;

class LogbookCreateForm extends Component
{   
    use WithFileUploads;
    public $logbooks;
    private $initialValue = [ 'user_id' => 'auth()->user()->id','tglkegiatan' => '', 'kegiatan' => '', 'rincian' => '', 'foto' => ''];

    public function mount()
    {
        $this->logbooks = [$this->initialValue];
    }

    public function addLogbookInput(): void
    {
        $this->logbooks[] = $this->initialValue;
    }

    public function removeLogbookInput(int $index): void
    {
        unset($this->logbooks[$index]);
        $this->logbooks = array_values($this->logbooks);
    }
    public function saveLogbooks()
    {
        $this->validate([
            'logbooks.*.user_id' => 'required|string|numeric',
            'logbooks.*.tglkegiatan' => 'required|date',
            'logbooks.*.kegiatan' => 'required',
            'logbooks.*.rincian' => 'required',
            'logbooks.*.foto' => 'required',
        ]);

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($this->logbooks as $logbook) {
            Logbook::create($logbook);
        }

        redirect()->route('/home/logbook')->with('success', 'Data logbook berhasil ditambahkan.');
    }

    public function render()
    {
        return view('livewire.logbook-create-form');
    }
}


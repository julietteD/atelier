<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
 
class UploadPhoto extends Component
{
    use WithFileUploads;
 
    public $photo;
 
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        $this->photo->store('photos');
    }
}
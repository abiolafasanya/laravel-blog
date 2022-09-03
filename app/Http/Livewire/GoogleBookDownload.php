<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class GoogleBookDownload extends Component
{
    public $book;
    public $file ='Get book';
    public $url = '';
 
    public function download()
    {

        $check = $this->book['accessInfo']['pdf'];
        if($check['isAvailable'] != true) {
            $this->file = 'Not Available';
        } else {
            foreach($check as $key => $file) {
                if($key == 'acsTokenLink'){
                    $this->file = 'Preparing...';
                    if(Http::get($check['acsTokenLink'])){
                        $this->file = 'Download';
                        $this->url  = $check['acsTokenLink'];
                    }
                } else {
                    $this->file = 'Not Available';
                }
            }
        }        
    }

    public function render()
    {
        return view('livewire.google-book-download');
    }
}

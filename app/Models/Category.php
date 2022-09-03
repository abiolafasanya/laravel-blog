<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'data'];

    protected function data(): array
    {
        return json_decode($this->data, true);
    }

    // json decode for compatibility with existing databases
    // public function toArray(): array
    // {
    //     return [
    //         'id' => $this->id,
    //         'name' => $this->name,
    //         'data' => $this->data,
    //         ];
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    // relazione tra foto e album in questo caso quindi la relazione e? 1 a molti
    public function photos() {
        return $this->hasMany(Photo::class);

    }
}

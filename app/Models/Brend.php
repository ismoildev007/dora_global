<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brend extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
    ];

    public function portfolios()
    {
        return $this->hasMany(Portfolio::class);
    }
}

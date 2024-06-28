<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'brend_id',
        'title',
        'description',
        'image',
        'image1',
        'image2',
        'image3',
    ];

    public function brend()
    {
        return $this->belongsTo(Brend::class, 'brend_id');
    }
}

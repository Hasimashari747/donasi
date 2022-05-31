<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded=[];

    public $timestamps = false;

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}

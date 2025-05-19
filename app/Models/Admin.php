<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];
    public function suoeradmin()
    {
        return $this->belongsTo(SuoerAdmin::class);
    }
}

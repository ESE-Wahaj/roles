<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuoerAdmin extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address'
    ];
    public function admin()
    {
        return $this->hasMany(Admin::class);
    }
}

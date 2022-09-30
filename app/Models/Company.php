<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Opportunity;

class Company extends Model
{
    use HasFactory;
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function opportunities() 
    {
        return $this->hasMany(Opportunity::class);
    }
}

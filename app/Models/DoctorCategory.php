<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DoctorCategory extends Model
{
    use HasFactory;
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}

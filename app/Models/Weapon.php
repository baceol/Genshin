<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model {
    use HasFactory;
    protected $table = "weapon";

    public function WeaponType() {
        return $this->belongsTo(WeaponType::class);
    }

    public function UserWeapon() {
        return $this->hasMany(UserWeapon::class);
    }
}

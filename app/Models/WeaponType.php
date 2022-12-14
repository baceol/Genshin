<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model {
    use HasFactory;
    protected $table = "weapon_type";

    public function character() {
        return $this->hasMany(Character::class);
    }

    public function weapon() {
        return $this->hasMany(Weapon::class);
    }
}

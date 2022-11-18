<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    use HasFactory;
    protected $table = "user";

    public function getNameAttribute($value) {
        return ucfirst($value);
    }

    public function setNameAttribute($value) {
        $this->attributes['name'] = strtolower($value);
    }

    public function UserCharacter() {
        return $this->hasMany(UserCharacter::class);
    }

    public function UserWeapon() {
        return $this->hasMany(UserWeapon::class);
    }

    public function UserActivity() {
        return $this->hasOne(UserActivity::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWeapon extends Model {
    use HasFactory;
    protected $table = "user_weapon";

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function weapon() {
        return $this->belongsTo(Weapon::class);
    }
}

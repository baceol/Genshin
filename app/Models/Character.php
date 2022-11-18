<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model {
    use HasFactory;
    protected $table = "character";
    protected $fillable = [
        "name",
        "storage",
        "nationality",
        "element_id",
        "weapon_id"
    ];

    public function element() {
        return $this->belongsTo(Element::class);
    }

    public function WeaponType() {
        return $this->belongsTo(WeaponType::class);
    }

    public function UserCharacter() {
        return $this->hasMany(UserCharacter::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCharacter extends Model {
    use HasFactory;
    protected $table = "user_character";

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function character() {
        return $this->belongsTo(Character::class);
    }
}

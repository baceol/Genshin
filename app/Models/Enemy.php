<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enemy extends Model {
    use HasFactory;
    protected $table = "enemy";

    public function element() {
        return $this->belongsTo(Element::class);
    }

    public function EnemyType() {
        return $this->belongsTo(EnemyType::class);
    }
}

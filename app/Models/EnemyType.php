<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnemyType extends Model {
    use HasFactory;
    protected $table = "enemy_type";

    public function enemy() {
        return $this->hasMany(Enemy::class);
    }
}

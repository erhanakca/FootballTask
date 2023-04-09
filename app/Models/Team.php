<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'team_id';
    protected $table = 'teams';
    protected $fillable=[
        'league_id',
        'name',
        'points',
        'played',
        'won',
        'drawn',
        'lost',
        'goal'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y');
    }

    public function league(): HasOne
    {
        return $this->hasOne(League::class, 'league_id', 'league_id');
    }
}

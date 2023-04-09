<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'league_id';
    protected $table = 'leagues';
    protected $fillable=[
        'name'
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

    public function team(): HasMany
    {
        return $this->hasMany(Team::class, 'team_id', 'team_id');
    }
}

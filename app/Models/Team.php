<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'thumbnail',
        'social1',
        'social2',
        'social3',
        'departament_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'departament_id' => 'integer',
    ];

    public function departaments(): BelongsToMany
    {
        return $this->belongsToMany(Departament::class);
    }

    public function departament(): BelongsTo
    {
        return $this->belongsTo(Departament::class);
    }
}

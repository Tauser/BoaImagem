<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'cover',
        'banner',
        'since',
        'content',
        'results',
        'url',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'since' => 'datetime',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function getCover()
    {
        if (str_starts_with($this->cover, 'http')) {
            return $this->cover;
        }
        return '/storage/' . $this->cover;
    }

    public function getBanner()
    {
        if (str_starts_with($this->banner, 'http')) {
            return $this->banner;
        }
        return '/storage/' . $this->banner;
    }



    public function getFormattedDate()
    {
        return $this->since->format('d/m/Y');
    }

    public function getFormattedDateYear()
    {
        return $this->since->format('Y');
    }

    public function getFormattedDateMonth()
    {
        return $this->since->format('m');
    }

    public function getFormattedDateDay()
    {
        return $this->since->format('d');
    }
}

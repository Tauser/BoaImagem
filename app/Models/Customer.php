<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'thumbnail',
        'content',
        'results',
        'url'

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'since' => 'datetime',
    ];

    public function category(): BelongsTo
    {

      return $this->belongsTo(CustomerCategory::class);
    }

    public function getFormattedDateYear()
    {
        return $this->since->format('Y');
    }

    public function getThumbnail()
    {
        if (str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }

        return '/storage/' . $this->thumbnail;
    }
}

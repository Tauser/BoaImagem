<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function services():HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function subCategories():HasMany
    {
        return $this->hasMany(ServiceSubcategory::class);
    }

    static public function getCategoryMenu()
    {
        return self::select('service_categories.*')->get();
    }
}

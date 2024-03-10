<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function subCategories()
    {
        return $this->hasMany(ServiceSubcategory::class);
    }

    static public function getCategoryMenu()
    {
        return self::select('service_categories.*')->get();
    }
}

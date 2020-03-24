<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;


class Profile extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $guarded = [''];

    /**
    * @var  string
    */
    protected $table = 'profiles';

    protected $casts = [
    'date_of_birth' => 'date',
    'created_at' => 'datetime',
    'updated_at' => 'datetime',
    ];

    public function getPhotoAttribute()
    {
        return $this->getFirstMediaUrl('profile', 'big');
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('profile');
    }

    public function registerMediaConversions(Media $media = null)
    {

        $this->addMediaConversion('thumb')
            ->crop('crop-center', 100, 100)
            ->performOnCollections('profile');

        $this->addMediaConversion('big')
        ->crop('crop-center', 300, 300)
        ->performOnCollections('profile');
    }

    public function church()
    {
        return $this->belongsTo('App\Models\Church', 'church_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

}
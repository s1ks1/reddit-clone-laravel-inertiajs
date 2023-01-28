<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Community extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    // Dovodi do greske u vidu onemogucavanja brisanja i editovanja sadrzaja, kao i objave artikala unutar community
    // Potrebno je rjesiti problem bez brisanja funkcije, ukoliko se funkcija obrise onemogucava se otvaranje prozora objave
    // public function getRouteKeyName() 
    // {
    //     return 'slug';
    // }

    public function posts()
{
    return $this->hasMany(Post::class);
}
}

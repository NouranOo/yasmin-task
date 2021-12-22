<?php

namespace App\Models;
use App\Models\PostTranslation; 

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
// use App\Models\PostTranslation;

class Post extends Model implements TranslatableContract
{
    use Translatable;
    
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['author'];
    public $translationModel = PostTranslation::class;

    // public function postTranslation()
    // {
    //     return $this->hasMany(PostTranslation::class, 'post_id', 'id');;
        
    // }
}
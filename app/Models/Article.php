<?php


namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;



class Article extends Model
{
    use  HasTranslations; // 2. To add translation methods

    // 3. To define which attributes needs to be translated
    public $translatable = ['title', 'content'];
}

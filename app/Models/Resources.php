<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
    use HasFactory;

    protected $table = 'resources';

    protected $fillable = [
        'name',
        'summary',
        'slug',
        'category_id',
        'language_id',
        'github_link',
        'website_link',
        'content',
        'price',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function languages()
    {
        return $this->belongsTo(Languages::class, 'language_id');
    }
}

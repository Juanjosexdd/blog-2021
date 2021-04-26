<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'slug','color'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //relacion muchos a muchos
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}

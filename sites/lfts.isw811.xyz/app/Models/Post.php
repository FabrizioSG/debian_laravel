<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = ['title','excerpt','body'];

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }

}

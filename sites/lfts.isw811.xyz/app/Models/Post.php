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

    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query
            ->where('title','like', '%' . request('search') . '%')
            ->orWhere('body','like', '%' . request('search') . '%'));

        $query->when($filters['category'] ?? false, fn($query, $category) =>
        $query->whereHas('category',fn ($query) => 
            $query->where('slug',$category))
        );
        $query->when($filters['author'] ?? false, fn($query, $author) =>
        $query->whereHas('author',fn ($query) => 
            $query->where('id',$author))
        );
    }

    public function category(){

        return $this->belongsTo(Category::class);
    }
    public function author(){

        return $this->belongsTo(User::class, 'user_id');
    }

}

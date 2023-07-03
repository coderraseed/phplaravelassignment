<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'content'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeWithCategory($query)
    {
        return $query->with('category');
    }

    public function scopeSoftDeleted($query)
    {
        return $query->onlyTrashed();
    }

    public function getCategoryPostCount($categoryId)
    {
        return $this->where('category_id', $categoryId)->count();
    }

    public function getSoftDeletedPosts()
    {
        return $this->onlyTrashed()->get();
    }
}

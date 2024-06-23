<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function entries()
    {
        return $this->hasMany(FaqEntry::class, 'category_id');
    }
}

// app/Models/FaqEntry.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqEntry extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'question', 'answer'];

    public function category()
    {
        return $this->belongsTo(FaqCategory::class);
    }
}

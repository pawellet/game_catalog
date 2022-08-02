<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eloquent\Book;

class Genre extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->hasMany(Book::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // public function transactions() {
    //     return $this->hasMany(Description::class);
    // }


    protected $fillable = ['user_id', 'title', 'author', 'description'];



    public function user() {
        return $this->belongsTo(User::class);
    }

    public function borrowedbooks() {
        return $this->hasMany(Borrowedbook::class);
    }

    public static function list() {

        $books = Book::orderByRaw('title')->get();
        $list = [];
        foreach ($books as $book) {
            $list[$book->id] = $book->title;
        }
        return $list;
    }
}

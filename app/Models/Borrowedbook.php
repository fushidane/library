<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrowedbook extends Model
{
    use HasFactory;

    protected $fillable = ['book_id', 'borrowed_date','return_date'];

    public function book() {
        return $this->belongsTo(Book::class);
    }

    public static function list() {

        $borrowedbooks = Borrowedbook::orderByRaw('borrowed_date')->get();
        $list = [];
        foreach ($borrowedbooks as $borrowedbook) {
            $list[$borrowedbook->id] = $borrowedbook->borrowed_date;
        }
        return $list;
    }
}

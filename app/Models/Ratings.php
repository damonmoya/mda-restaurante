<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    protected $table = 'rating';
    protected $fillable = ['idClient', 'rating', 'comment'];

    public function user() {
        return $this->belongsTo(User::class,'idClient');
    }

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idRating';
}

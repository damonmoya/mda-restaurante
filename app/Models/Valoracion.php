<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Valoracion extends Model
{
    use HasFactory;
    use Rateable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'valoraciones';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idRating';

    $post = Post::first();

    // Add a rating of 5, from the currently authenticated user
    $post->rate(5);
    dd(Post::first()->ratings);

    $post = Post::first();

    // Add a rating of 3, or change the user's existing rating _to_ 3.
    $post->rateOnce(3);
    dd(Post::first()->ratings);

    $post = Post::first();

    dd($post->averageRating);
    // $post->averageRating() also works for this.

    $post = Post::first();

    dd($post->ratingPercent(10)); // Ten star rating system

    $post = Post::first();

    // These values depend on the user being logged in,
    // they use the Auth facade to fetch the current user's id.


    dd($post->userAverageRating); 

    dd($post->userSumRating);

    dd($post->timesRated());

    // Or if you specifically want the number of unique users that have rated the model:
    dd($post->usersRated());

}

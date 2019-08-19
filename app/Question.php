<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question'
    ];

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public static function randomQuestion()
    {
        $fake_questions = [
            "How could the world become such a mess ?", 
            "If something has been there forever, does that make it right ?", 
            "What's veganism really about ?",
            "We are the most intelligent species there is, doesn't that make us responsible for other species well being ?"
        ];
        return collect($fake_questions)->random();
    }
}

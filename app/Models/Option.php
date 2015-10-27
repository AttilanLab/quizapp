<?php namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $table = 'options';

    public function correctAnswer() {
    	return $this->hasOne('App\Models\CorrectAnswer');
    }

    public function question() {
    	return $this->belongsTo('App\Models\Question');
    }

    public function answers() {
    	return $this->hasMany('App\Models\Answer');
    }
}

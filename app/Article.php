<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table = 'articles';

    protected $fillable = [
        'titre','description'
    ];
    public function categorie(){
    	return $this->belongsTo('App\Categorie');
    }
}

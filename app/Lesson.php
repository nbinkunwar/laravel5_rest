<?php
/**
 * Created by IntelliJ IDEA.
 * User: nbin
 * Date: 6/29/15
 * Time: 2:05 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Lesson extends Model{

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
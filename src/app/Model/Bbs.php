<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bbs extends Model
{
    //モデルファイルの編集(Step2-5-2)
    protected $fillable = ['name', 'comment']; //追記したところ
}

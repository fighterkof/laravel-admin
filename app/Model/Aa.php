<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aa extends Model
{
    /**
     * 与模型关联的数据表。
     *
     * @var string
     */
    protected $table = 'order';

    static function t(){

        echo 12313333;
    }
}
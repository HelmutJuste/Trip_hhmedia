<?php
/**
 * Created by PhpStorm.
 * User: sesso
 * Date: 06/05/2017
 * Time: 21:37
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     *
     */
    protected $table = 'lieu';
    protected $primaryKey = 'numero';
}
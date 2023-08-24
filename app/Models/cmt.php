<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cmt extends Model
{
    use HasFactory;
    protected $table = 'cmt';
    protected $primaryKey = 'id';

    protected $fillable = [ 'id_user','id_sp', 'message'];
    public $timestamps = false;
}

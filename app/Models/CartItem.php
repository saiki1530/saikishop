<?php

// app/Models/CartItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = ['id_sp', 'user_id', 'soluong'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

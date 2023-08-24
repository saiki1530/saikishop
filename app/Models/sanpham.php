<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    class sanpham extends Model
    {
        public $timestamps = false;


        protected $primaryKey='id_sp';
        protected $table = 'sanpham'; // Đảm bảo tên bảng là 'sanpham', không phải 'sanphams'.
        protected $fillable = [
            'id_loai',
            'ten_sp',
            'gia',
            'gia_km',
            'hinh',

        ];


    }

?>

<?php

namespace App\Models\Media;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'medias';

    public $primaryKey = 'id';

    protected $fillable = [
        'name', 'url',
    ];
}

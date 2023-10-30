<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    use HasFactory;

    protected $table = 'admins'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'name', 'email', 'password',
    ];
}

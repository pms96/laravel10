<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

     /**
     * Documentos table
     *
     * @var string
     */
    protected $table = 'Documentos';

    /**
     * Documentos fields
     *
     * @var array
     */
    protected $fillable = [
        'id', 
        'name', 
        'csv'
    ];


    public static function buscarDocumentoIds(array|int $ids)
    {
        if ( is_int($ids) ) {
            return static::whereIn('id', [$ids]);
        }
        
        if ( is_array($ids) && count($ids) > 0 ) {
            return static::whereIn('id', $ids);
        }

        return false;
    }
}

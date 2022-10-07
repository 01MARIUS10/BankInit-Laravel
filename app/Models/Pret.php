<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pret';

    /**
     * The table associated with the model.
     *
     * @var integer
     */
    protected $primaryKey = 'id ';
    public $timestamps = false;
    protected $fillable = [
        'ClientName',
        'montant',
        'end_at',
        'interet',
        'pourcentage',
        'mode_payement',
        'begin_at'
    ];
}

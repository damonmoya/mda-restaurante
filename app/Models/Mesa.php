<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mesas';
    protected $fillable = [
        'capacity',
        'availability',
    ];

    public function reservas() {
        return $this->belongsToMany(Reserva::class,'reservas_mesas','idTable','idBook');
    }

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idTable';
}

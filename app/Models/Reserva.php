<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservas';
    protected $fillable = ['idClient', 'idTable', 'date'];

    public function user() {
        return $this->belongsTo(User::class,'idClient');
    }

    public function mesas() {
        return $this->belongsToMany(Mesa::class,'reservas_mesas','idBook','idTable');
    }

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'idReservation';
}

<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    use HasFactory;

    // Specificeer de juiste tabelnaam
    protected $table = 'landen';

    protected $fillable = [
        'Naam',
        'EersteTaal',
        'AantalInwooners',
        'AantalInwoonersDatum',
        'Hooftstad',
        'TelefoonCode',
        'Bnp',
        'BnpDatum',
        'Gevonden'
    ];

    protected $casts = [
        'AantalInwoonersDatum' => 'datetime',
        'BnpDatum' => 'datetime',
        'Gevonden' => 'datetime'
    ];
}

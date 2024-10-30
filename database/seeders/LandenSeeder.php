<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("landen")->insert([
            "Naam" => "België",
            "EersteTaal" => "Nederlands",
            "TweedeTaal" => "Frans",
            "AantalInwoners" => 11690000,
            "Hoofdstad" => "Brussel",
            "Munteenheid" => "Euro",
            "Continent" => "Europa",
            "TelefoonCode" => "+32",
            "LandCode" => "BE",
            "Oppervlakte" => 30688,
            "bnp" => 494,
            // "LandGevonden" => "1830-10-04",
            "OppervlakteLaatstBijgewerkt" => "2024-10-14",
            "bnpLaatstBijgewerkt" => "2024-10-14",
            "AantalInwonersLaatstBijgewerkt" => "2024-10-14"
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('landen', function (Blueprint $table) {
            $table->id();
            $table->string('Naam');
            $table->string('EersteTaal')->nullable();
            $table->integer('AantalInwooners')->nullable();
            $table->date('AantalInwoonersDatum')->nullable(); // Zorg ervoor dat dit een date is
            $table->string('Hooftstad')->nullable();
            $table->integer('TelefoonCode')->nullable();
            $table->decimal('Bnp', 15, 2)->nullable(); // Dit verhoogt het bereik van de waarde.
            $table->date('BnpDatum')->nullable();
            $table->date('Gevonden'); // Zorg ervoor dat dit een date is, zonder tijd
            $table->timestamps(); // Dit voegt automatisch created_at en updated_at toe
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

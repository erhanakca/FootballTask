<?php

use App\Models\League;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id('team_id')->autoIncrement();
            $table->foreignIdFor(League::class, 'league_id');
            $table->string('name');
            $table->string('points');
            $table->string('played');
            $table->string('won');
            $table->string('drawn');
            $table->string('lost');
            $table->string('goal');
            $table->timestamps();
            $table->softDeletes();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};

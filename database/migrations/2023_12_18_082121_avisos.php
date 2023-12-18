<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema;

return new class extends Migration { 
    public function up() 
    { 
        Schema::create('avisos', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nombre'); 
            $table->string('apellido'); 
            $table->integer('numero'); 
            $table->integer('dni');
            $table->timestamps();
        }); 
    } 
    public function down() 
    { 
        Schema::dropIfExists('avisos'); 
    } 
};

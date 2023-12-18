<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration { 
    public function up() 
    { 
        Schema::create('opiniones', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nombre'); 
            $table->string('correo'); 
            $table->text('opinion'); 
            $table->integer('valor');
            $table->timestamps(); 
        }); 
    } 
    public function down() 
    { 
        Schema::dropIfExists('opiniones'); 
    } 
};

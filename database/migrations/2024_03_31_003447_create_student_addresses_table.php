<?php

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
        Schema::create('student_addresses', function (Blueprint $table) {
            $table->uuid();

            $table->string('cep', 8);
            $table->string('uf');
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('numero');

            $table->foreignUuid('student_uuid')->unique()->references('uuid')->on('students')->cascadeOnDelete();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_addresses');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create( 'customers', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 50 );
            $table->string( 'email', 50 )->unique();
            $table->string( 'mobile', 50 );

            $table->unsignedBigInteger( 'user_id' );
            $table->foreign( 'user_id' )->references( 'id' )->on( 'users' )->cascadeOnUpdate()->cascadeOnDelete();

            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists( 'customers' );
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
 // database/migrations/YYYY_MM_DD_create_contents_table.php

public function up()
{
    Schema::create('contents', function (Blueprint $table) {
        $table->id();
        $table->string('heading1');
        $table->string('heading2');

        $table->text('content');
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};

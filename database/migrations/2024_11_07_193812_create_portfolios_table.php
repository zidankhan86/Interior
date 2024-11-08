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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_name_id')->constrained('portfolio_types')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('thumbnail');
            $table->text('images');
            $table->longText('location');
            $table->longText('scope');
            $table->longText('complete_date')->nullable();
            $table->longText('portfolio_description')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamp('created_at')->useCurrent();
	        $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

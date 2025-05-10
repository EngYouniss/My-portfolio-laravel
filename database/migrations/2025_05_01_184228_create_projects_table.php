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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
              $table->string('project_name');
              $table->text('project_description');
              $table->string('project_type')->nullable();
              $table->text('project_features')->nullable();
              $table->string('project_technics')->nullable();
              $table->string('project_status')->default('Completed');
              $table->string('project_url')->nullable();
              $table->date('project_start_date')->nullable();
              $table->date('project_end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

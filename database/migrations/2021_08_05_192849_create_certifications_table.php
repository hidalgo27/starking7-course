<?php

use App\Models\Certification;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();

//            $table->string('name');
//            $table->string('url')->nullable();
            $table->enum('status', [Certification::PENDIENTE, Certification::PROCESO, Certification::TERMINADO, Certification::TERMINADO_CIP])->default(Certification::PENDIENTE);

            $table->unsignedBigInteger('course_user_id');

            $table->foreign('course_user_id')->references('id')->on('course_user')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certifications');
    }
}

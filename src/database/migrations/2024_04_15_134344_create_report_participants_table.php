<?php

use App\Models\Report;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_participants', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Report::class, 'report_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(User::class, 'user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('report_participants');
    }
}

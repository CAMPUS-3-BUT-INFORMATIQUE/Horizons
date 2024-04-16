<?php

use App\Models\ReportType;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ReportType::class, 'report_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('report_agenda');
            $table->text('decisions');
            $table->text('conclusions');
            $table->text('comments');
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
        Schema::dropIfExists('reports');
    }
}

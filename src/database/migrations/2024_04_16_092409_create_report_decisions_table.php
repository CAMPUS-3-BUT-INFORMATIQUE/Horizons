<?php

use App\Models\Report;
use App\Models\ReportDecisionType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_decisions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Report::class, 'report_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(ReportDecisionType::class, 'report_decision_type_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('title');
            $table->text('description');
            $table->boolean('is_accepted')->default(false);
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
        Schema::dropIfExists('report_decisions');
    }
}

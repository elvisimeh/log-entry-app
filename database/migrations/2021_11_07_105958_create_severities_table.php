<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Severity;

class CreateSeveritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('severities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('severity');
            $table->integer('value');
            $table->timestamps();
        });

        Severity::insert(
            array(
            [
                'severity' => 'Emergency',
                'value' => 0
            ],
            [
                'severity' => 'Alert',
                'value' => 1
            ],
            [
                'severity' => 'Critical',
                'value' => 2
            ],
            [
                'severity' => 'Error',
                'value' => 3
            ],
            [
                'severity' => 'Warning',
                'value' => 4
            ],
            [
                'severity' => 'Notice',
                'value' => 5
            ],
            [
                'severity' => 'Information',
                'value' => 6
            ],
            [
                'severity' => 'Debug',
                'value' => 7
            ]
            )
        );
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('severities');
    }
}

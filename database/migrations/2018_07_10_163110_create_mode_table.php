<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Mode;

class CreateModeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('modes', function (Blueprint $table) {
          $table->increments('id');
          $table->string('description');
          $table->timestamps();
      });
      $data = array(
          array(
          "description" => "Timer Mode"
          ),
          array(
          "description" => "Impact Mode"
          ),
          array(
          "description" => "Timer & Impact Mode"
          )
      );

      Mode::insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

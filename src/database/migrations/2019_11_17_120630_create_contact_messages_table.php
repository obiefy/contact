<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMessagesTable extends Migration {

    /**
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages' ,function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->text('body');

            $table->timestamps();
        });

    }

    /**
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_messages');
    }

}

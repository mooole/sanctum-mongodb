<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_access_tokens', function ($collection) {
            $collection->bigIncrements('id');
            $collection->morphs('tokenable');
            $collection->string('name');
            $collection->string('token', 64);
            $collection->text('abilities')->nullable();
            $collection->timestamp('last_used_at')->nullable();
            $collection->timestamps();

            $collection->unique('token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}

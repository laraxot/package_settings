<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use XRA\Settings\Models\Settings;

class CreateSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('settings')) {
            Schema::create('settings', function (Blueprint $table) {
                $table->increments('id');
                $table->string('appname');
                $table->string('description');
                $table->string('keywords');
                $table->string('author');
                $table->timestamps();
            });
        }

        Settings::create([
            'appname' => 'XRA', 'description' => 'The modular laravel administration panel', 'keywords' => 'XRA,Admin,Panel,CMS,Laravel,Modern,Developers', 'author' => 'Erik Campobadal, Aitor Riba',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

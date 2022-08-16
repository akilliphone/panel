<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('code', 16);
            $table->string('name', 64);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('tc_kimlik', 11)->unique();
            $table->string('email')->unique();
            $table->string('gsm', 13)->unique();
            $table->string('telephone', 13)->unique();
            $table->bigInteger('user_type_id')->unsigned()->index();
            $table->integer('status');
            $table->string('last_ip', 15)->nullable();
            $table->bigInteger('language_id')->unsigned()->index();
            $table->string('api_key', 32)->unique();
            $table->string('secret_key', 32)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 32);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('languages', function (Blueprint $table) {
            $table->id('language_id');
            $table->string('code', 2)->unique();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('user_roles', function(Blueprint $table) {
            $table->id('user-role_id');
            $table->bigInteger('user_type_id')->unsigned()->index();
            $table->bigInteger('service_id')->unsigned()->index();
            $table->tinyInteger('can_delete')->default(0);
            $table->tinyInteger('can_update')->default(0);
            $table->tinyInteger('can_view')->default(0);
            $table->timestamps();
        });

        Schema::create('services', function(Blueprint $table) {
            $table->id('service_id');
            $table->string('name', 32);
            $table->string('code', 32)->unique();
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
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_types');
        Schema::dropIfExists('languages');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('services');
    }
}

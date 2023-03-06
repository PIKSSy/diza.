<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday');
            $table->string('gender');
            $table->foreignId('language')->references('lang_id')->on('languages');
            $table->binary('avatar')->nullable();
            $table->tinyInteger('status');
            $table->dateTime('last_seen')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        //alter table t add constraint chk_t_dob check (dob <= curdate() - interval '18' year);
        //DB::statement("ALTER TABLE users ADD CONSTRAINT check_age CHECK (DATEDIFF(YEAR, birthday, "+Carbon::now()+" >= 18)");
        //DB::statement("ALTER TABLE users ADD CONSTRAINT check_birthday CHECK (DATEDIFF(NOW(), birthday) / 365.25 >= 18)");
        $genders = ['M', 'F', 'N'];
        DB::statement("ALTER TABLE users ADD CONSTRAINT gender_check CHECK (gender in ('" . implode("','", $genders) . "') )");


        User::create(['username'=>'diza<3','email'=>'diza@<3','email_verified_at'=>Carbon::now(),'password'=>Hash::make('DizA<3point!@2023.'),'birthday'=>'2000.01.01','gender'=>'N','language'=>1,'status'=>1,]);
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};

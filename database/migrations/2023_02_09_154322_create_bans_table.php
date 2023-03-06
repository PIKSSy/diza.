    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
        Schema::create('bans', function (Blueprint $table) {
            $table->primary(['user','begin']);
            $table->foreignId('user')->references('user_id')->on('users');
            $table->dateTime('begin');
            $table->dateTime('end')->nullable();
            $table->foreignId('admin')->references('admin_id')->on('admins');
            $table->string('reason',2000);
            $table->string('ip');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bans');
    }
};

<?php

use App\Models\Language;
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
        Schema::create('languages', function (Blueprint $table) {
            $table->id('lang_id');
            $table->string('language');
        });
        Language::create(['language' => 'English']);
        Language::create(['language' => 'Mandarin']);
        Language::create(['language' => 'Mandarin']);
        Language::create(['language' => 'Spanish']);
        Language::create(['language' => 'Hindi']);
        Language::create(['language' => 'Arabic']);
        Language::create(['language' => 'Bengali']);
        Language::create(['language' => 'Russian']);
        Language::create(['language' => 'Portuguese']);
        Language::create(['language' => 'Indonesian']);
        Language::create(['language' => 'German']);
        Language::create(['language' => 'French']);
        Language::create(['language' => 'Italian']);
        Language::create(['language' => 'Japanese']);
        Language::create(['language' => 'Korean']);
        Language::create(['language' => 'Turkish']);
        Language::create(['language' => 'Vietnamese']);
        Language::create(['language' => 'Thai']);
        Language::create(['language' => 'Persian']);
        Language::create(['language' => 'Urdu']);
        Language::create(['language' => 'Polish']);
        Language::create(['language' => 'Malay']);
        Language::create(['language' => 'Swahili']);
        Language::create(['language' => 'Marathi']);
        Language::create(['language' => 'Telugu']);
        Language::create(['language' => 'Bhojpuri']);
        Language::create(['language' => 'Gujarati']);
        Language::create(['language' => 'Romanian']);
        Language::create(['language' => 'Javanese']);
        Language::create(['language' => 'Punjabi']);
        Language::create(['language' => 'Kannada']);
        Language::create(['language' => 'Serbo-Croatian']);
        Language::create(['language' => 'Sindhi']);
        Language::create(['language' => 'Chhattisgarhi']);
        Language::create(['language' => 'Hausa']);
        Language::create(['language' => 'Oriya']);
        Language::create(['language' => 'Burmese']);
        Language::create(['language' => 'Cebuano']);
        Language::create(['language' => 'Farsi']);
        Language::create(['language' => 'Russian']);
        Language::create(['language' => 'Turkish']);
        Language::create(['language' => 'Uzbek']);
        Language::create(['language' => 'Xhosa']);
        Language::create(['language' => 'Yoruba']);
        Language::create(['language' => 'Igbo']);
        Language::create(['language' => 'Akan']);
        Language::create(['language' => 'Dutch']);
        Language::create(['language' => 'Ukrainian']);
        Language::create(['language' => 'Min Nan']);
        Language::create(['language' => 'Hakka']);
        Language::create(['language' => 'Tamil']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('languages');
    }
};

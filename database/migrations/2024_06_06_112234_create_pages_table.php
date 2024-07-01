<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id')->default(null)->nullable();
            $table->string('url', 255);
            $table->string('title', 255);
            $table->string('external_link', 255)->nullable();
            $table->longText('content_primary')->nullable();
            $table->longText('content_secondary')->nullable();
            $table->dateTime('display_date')->nullable();
            $table->string('template_type', 15)->default('page');
            $table->string('lang', 4)->default('tr');
            $table->boolean('is_publish')->default(1);

            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->text('image_3')->nullable();

            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->integer('ordinal')->nullable();
            $table->string('component', 255)->nullable();
            $table->string('album', 255)->nullable();
            $table->string('album_2', 255)->nullable();
            $table->string('video', 255)->nullable();
            $table->json('link_view', 255)->nullable()->comment('hangi menülerde görünsün');
            $table->string('box_view', 250)->nullable();

            $table->string('highlited_value_1', 250)->nullable();
            $table->string('highlited_value_2', 255)->nullable();
            $table->string('highlited_value_3', 255)->nullable();
            $table->string('highlited_icon_1', 255)->nullable();
            $table->string('highlited_icon_2', 255)->nullable();
            $table->string('highlited_icon_3', 255)->nullable();

            $table->boolean('has_sidebar')->default(1);
            $table->boolean('has_subpages')->default(0);
            $table->integer('cross_page')->nullable();

            $table->string('tab_1_title', 255)->nullable();
            $table->text('tab_1_content')->nullable();
            $table->string('tab_2_title', 255)->nullable();
            $table->text('tab_2_content')->nullable();
            $table->string('tab_3_title', 255)->nullable();
            $table->text('tab_3_content')->nullable();
            $table->string('tab_4_title', 255)->nullable();
            $table->text('tab_4_content')->nullable();
            $table->string('tab_5_title', 255)->nullable();
            $table->text('tab_5_content')->nullable();

            $table->text('accordion_1_title')->nullable();
            $table->text('accordion_1_content')->nullable();
            $table->text('accordion_2_title')->nullable();
            $table->text('accordion_2_content')->nullable();
            $table->text('accordion_3_title')->nullable();
            $table->text('accordion_3_content')->nullable();
            $table->text('accordion_4_title')->nullable();
            $table->text('accordion_4_content')->nullable();
            $table->text('accordion_5_title')->nullable();
            $table->text('accordion_5_content')->nullable();

            $table->text('badges')->nullable();
            $table->text('badges_2')->nullable();

            $table->string('widgets', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

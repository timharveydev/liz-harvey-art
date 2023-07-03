<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
            $table->string('name');
            $table->string('pre_title')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('etsy_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->timestamps();
        });

        // Insert page rows with initial values
        DB::table('pages')->insert(
            [
                [
                    'name' => 'home',
                    'pre_title' => 'Artwork by',
                    'title' => 'Liz Harvey',
                    'description' => null,
                    'featured_image' => null,
                    'etsy_url' => null,
                    'facebook_url' => null,
                    'instagram_url' => null,
                ],
                [
                    'name' => 'gallery',
                    'pre_title' => null,
                    'title' => null,
                    'description' => null,
                    'featured_image' => null,
                    'etsy_url' => null,
                    'facebook_url' => null,
                    'instagram_url' => null,
                ],
                [
                    'name' => 'about',
                    'pre_title' => null,
                    'title' => null,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor non leo viverra volutpat. Praesent luctus tortor dolor, eget mollis est mollis nec. Aliquam erat volutpat. Etiam in ipsum hendrerit, lacinia massa in, lobortis augue. Donec ac imperdiet lacus. Morbi efficitur cursus dui at vulputate. Nulla posuere sapien felis, eu aliquam magna dignissim a. Duis convallis aliquam augue, sit amet tempus felis auctor at. Aliquam vitae elementum risus, venenatis porttitor justo.',
                    'featured_image' => 'placeholder.jpg',
                    'etsy_url' => null,
                    'facebook_url' => null,
                    'instagram_url' => null,
                ],
                [
                    'name' => 'contact',
                    'pre_title' => null,
                    'title' => null,
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor non leo viverra volutpat. Praesent luctus tortor dolor, eget mollis est mollis nec. Aliquam erat volutpat. Etiam in ipsum hendrerit, lacinia massa in, lobortis augue. Donec ac imperdiet lacus. Morbi efficitur cursus dui at vulputate. Nulla posuere sapien felis, eu aliquam magna dignissim a. Duis convallis aliquam augue, sit amet tempus felis auctor at. Aliquam vitae elementum risus, venenatis porttitor justo.',
                    'featured_image' => null,
                    'etsy_url' => null,
                    'facebook_url' => null,
                    'instagram_url' => null,
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

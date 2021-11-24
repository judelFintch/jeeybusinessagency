<?php
declare(strict_types=1);

use App\Models\Gallery;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('picture');
            $table->boolean('status')->default(Gallery::FALSE_STATUS);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
};

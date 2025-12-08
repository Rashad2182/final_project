<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('ip_address')->after('role_id')->nullable();
            $table->foreign('ip_address')->references('id')->on('visitors')->onDelete('cascade');

            DB::table('users')
                ->select('ip_address as ip_address')
                ->get();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('ip_address');
            $table->dropColumn('ip_address');
        });
    }
};

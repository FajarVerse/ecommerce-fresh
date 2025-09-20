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
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->after('username');
            $table->string('nohp')->nullable()->after('email');
            $table->string('alamat')->nullable()->after('nohp');
            $table->string('kota')->nullable()->after('alamat');
            $table->string('negara')->nullable()->after('kota');
            $table->string('kodepos')->nullable()->after('negara');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['email', 'nohp', 'alamat', 'kota', 'negara', 'kodepos']);
        });
    }
};

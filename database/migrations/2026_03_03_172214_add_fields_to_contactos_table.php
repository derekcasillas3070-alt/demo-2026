<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Agrega SOLO si no existen
        if (!Schema::hasColumn('contactos', 'nombre')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->string('nombre');
            });
        }

        if (!Schema::hasColumn('contactos', 'correo')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->string('correo');
            });
        }

        if (!Schema::hasColumn('contactos', 'mensaje')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->text('mensaje');
            });
        }
    }

    public function down(): void
    {
        // (opcional) revertir solo si existen
        if (Schema::hasColumn('contactos', 'mensaje')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->dropColumn('mensaje');
            });
        }

        if (Schema::hasColumn('contactos', 'correo')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->dropColumn('correo');
            });
        }

        if (Schema::hasColumn('contactos', 'nombre')) {
            Schema::table('contactos', function (Blueprint $table) {
                $table->dropColumn('nombre');
            });
        }
    }
};
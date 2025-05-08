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
        // Utilizamos el método Schema::create para crear una nueva tabla en la base de datos.
        // 'posts' es el nombre de la tabla que se va a crear.
        // Schema::create: Este método se usa para crear una nueva tabla en la base de datos. Se pasa el nombre de la tabla como el primer argumento ('posts' en este caso).
        // $table: Es una instancia de la clase Blueprint que se usa para definir las columnas de la tabla. Se utiliza en el callback para especificar la estructura de la tabla.
        Schema::create('posts', function (Blueprint $table) {

            // Crea una columna de tipo 'bigint' para la clave primaria 'id', que se autoincrementa automáticamente.
            // Este será el identificador único para cada registro de post.
            $table->id();

            // Crea una columna llamada 'title' de tipo 'string' que almacenará el título del post.
            // 'string' es un tipo de columna que permite hasta 255 caracteres.
            $table->string('title');

            // Crea una columna llamada 'description' de tipo 'text' que almacenará la descripción del post.
            // 'text' es un tipo de columna adecuado para almacenar textos largos o descripciones.
            $table->text('description');

            // Crea automáticamente las columnas 'created_at' y 'updated_at'.
            // 'created_at' almacena la fecha y hora en que el post fue creado.
            // 'updated_at' almacena la fecha y hora en que el post fue actualizado por última vez.
            // Laravel gestiona automáticamente estos valores.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

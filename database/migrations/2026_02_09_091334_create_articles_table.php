public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->text('contenu');
        $table->text('image')->nullable();
        $table->timestamps();
    });
}

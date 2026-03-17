
public function up(): void
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // البائع
        $table->string('title');
        $table->text('description');
        $table->string('cover_image'); // غلاف الكتاب
        [span_9](start_span)$table->string('file_path'); // مسار ملف PDF أو Word[span_9](end_span)
        $table->decimal('price', 8, 2); // سعر الكتاب
        [span_10](start_span)// حسابات العمولة[span_10](end_span)
        $table->decimal('site_commission', 8, 2)->virtualAs('price * 0.20'); // 20% للموقع
        $table->decimal('seller_net', 8, 2)->virtualAs('price * 0.80'); // 80% للبائع
        $table->enum('status', ['pending', 'published', 'rejected'])->default('pending');
        $table->timestamps();
    });
}


public function up()
{
    Schema::create('transactions', function (Blueprint $table) {
        $table->id();
        $table->foreignId('book_id')->constrained(); // الكتاب المباع
        $table->foreignId('seller_id')->constrained('users'); // البائع
        $table->decimal('total_amount', 10, 2); // سعر الكتاب الكامل
        $table->decimal('site_commission', 10, 2); // عمولة الموقع (20%)
        $table->decimal('seller_net', 10, 2); // صافي ربح البائع (80%)
        $table->string('payment_status')->default('completed');
        $table->timestamps();
    });
}

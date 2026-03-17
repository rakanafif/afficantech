
public function up(): void
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        [span_4](start_span)$table->string('phone')->nullable(); // لجمع أرقام الهواتف[span_4](end_span)
        $table->string('password');
        [span_5](start_span)// تحديد نوع المستخدم: قارئ، بائع، أو مدير[span_5](end_span)
        $table->enum('role', ['reader', 'seller', 'admin'])->default('reader'); 
        $table->boolean('is_approved')->default(false); [span_6](start_span)// موافقة المدير للبائعين[span_6](end_span)
        $table->rememberToken();
        $table->timestamps();
    });
}

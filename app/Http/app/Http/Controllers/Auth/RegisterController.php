
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

// داخل وظيفة التخزين بعد حفظ بيانات المستخدم:
Mail::to($user->email)->send(new WelcomeEmail());

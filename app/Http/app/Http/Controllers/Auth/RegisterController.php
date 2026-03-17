
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

// داخل وظيفة التخزين بعد حفظ بيانات المستخدم:
Mail::to($user->email)->send(new WelcomeEmail());

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

// بعد نجاح عملية إنشاء المستخدم $user
Mail::to($user->email)->send(new WelcomeEmail());

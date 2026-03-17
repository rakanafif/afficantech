namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Book;
use App\Models\Transaction;

class PaymentController extends Controller
{
    // بدء عملية الدفع عبر PayPal
    public function processPayment(Request $request, $bookId)
    {
        $book = Book::findOrFail($bookId);
        $provider = new PayPalClient;
        $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "purchase_units" => [
                [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $book->price
                    ]
                ]
            ]
        ]);

        return redirect($response['links'][1]['href']); // توجيه المستخدم لصفحة دفع PayPal
    }

    // تأكيد نجاح الدفع وتوزيع العمولات
    public function success(Request $request)
    {
        // الكود هنا يستلم تأكيد PayPal ويقوم بـ:
        // 1. تسجيل العملية في جدول Transactions.
        [span_0](start_span)// 2. تفعيل زر التحميل الفوري للمشتري[span_0](end_span).
        [span_1](start_span)// 3. إضافة الربح الصافي (80%) لمحفظة البائع[span_1](end_span).
    }
}


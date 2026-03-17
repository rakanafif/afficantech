<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsAppController extends Controller
{
    public function handleWebhook(Request $request)
    {
        $message = $request->input('message'); // الرسالة القادمة من العميل
        $sender = $request->input('sender');   // رقم هاتف العميل

        [span_2](start_span)// منطق الرد التلقائي حسب نوع السؤال[span_2](end_span)
        if (str_contains($message, 'book') || str_contains($message, 'livre')) {
            $reply = "Merci de nous contacter. Pour vos questions sur les livres, visitez notre bibliothèque numérique.";
        } elseif (str_contains($message, 'pay') || str_contains($message, 'achat')) {
            $reply = "Pour les problèmes de paiement, notre support technique vous répondra dans 5 minutes.";
        } else {
            $reply = "Bienvenue chez Affican Digital. Comment pouvons-nous vous aider ?";
        }

        $this->sendWhatsAppMessage($sender, $reply);
    }

    private function sendWhatsAppMessage($to, $message)
    {
        // الربط مع API واتساب (Twilio أو Meta)
        Http::withToken(config('whatsapp.api_token'))
            ->post(config('whatsapp.api_url'), [
                'to' => $to,
                'body' => $message,
            ]);
    }
}


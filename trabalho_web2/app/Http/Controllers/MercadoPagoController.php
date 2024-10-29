<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MercadoPagoController extends Controller
{
    public function criarPlano()
    {
        // Configurações da URL e token
        $url = "https://api.mercadopago.com/preapproval_plan";
        $token = "APP_USR-3155528182109064-102910-2ee39b6b91aa37a5c9784a5d4e547451-2052516476";

        // Dados JSON para o plano de assinatura
        $data = [
            "reason" => "Barbearia Retrovisor - Plano Plus",
            "auto_recurring" => [
                "frequency" => 1,
                "frequency_type" => "months",
                "repetitions" => 1,
                "billing_day" => 10,
                "billing_day_proportional" => false,
                "transaction_amount" => 169.90, // Corrigido para ponto
                "currency_id" => "BRL"
            ],
            "payment_methods_allowed" => [
                "payment_types" => [
                    [
                        "id" => "credit_card"
                    ]
                ],
                "payment_methods" => [
                    [
                        "id" => "visa"
                    ]
                ]
            ],
            "back_url" => "http://127.0.0.1:8000/logado"
        ];

        // Inicializa o cliente Guzzle
        $client = new Client();

        try {
            // Realiza a requisição POST
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => "Bearer $token",
                    'Content-Type' => 'application/json'
                ],
                'json' => $data // Converte automaticamente para JSON
            ]);

            // Decodifica e retorna a resposta
            $responseData = json_decode($response->getBody(), true);
            return response()->json(['response' => $responseData], 200);

        } catch (\Exception $e) {
            // Retorna erro em caso de falha
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}

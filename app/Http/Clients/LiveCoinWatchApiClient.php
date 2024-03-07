<?php

namespace App\Http\Clients;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use JsonException;

class LiveCoinWatchApiClient
{
    private string $apiKey;
    private string $apiBaseUrl;
    public string $currency = 'USD';

    public function __construct()
    {
        $this->apiKey = env('LIVE_COIN_WATCH_API_KEY');
        $this->apiBaseUrl = env('LIVE_COIN_WATCH_BASE_ENDPOINT');
    }

    /**
     * @param string $endpoint
     * @param array $data
     *
     * @return string
     * @throws GuzzleException
     * @throws JsonException
     */
    private function request(
        string $endpoint,
        array $data = []
    ): string {
        try {
            $client = new HttpClient([
                'base_uri' => $this->apiBaseUrl,
            ]);

            $request = new Request(
                'POST',
                $endpoint,
                [
                    'Content-Type' => 'application/json',
                    'x-api-key' => $this->apiKey,
                ],
                json_encode($data, JSON_THROW_ON_ERROR),
            );

            return $client->send($request)->getBody()->getContents();
        } catch (\Throwable $e) {
            return response()->json([
                'code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @return string
     * @throws GuzzleException
     * @throws JsonException
     */
    public function overview(): string
    {
        return $this->request(
            '/overview',
            [
                'currency' => $this->currency,
            ],
        );
    }

    /**
     * @param int $start
     * @param int $end
     *
     * @return string
     * @throws GuzzleException
     * @throws JsonException
     */
    public function overviewHistory(
        int $start,
        int $end
    ): string {
        return $this->request(
            '/overview/history',
            [
                'currency' => $this->currency,
                'start'    => $start,
                'end'      => $end,
            ],
        );
    }
}

<?php

namespace Tests\Unit\app\Http\Clients;

use App\Http\Clients\LiveCoinWatchApiClient;
use DateInterval;
use DateTime;
use Tests\TestCase;

class LiveCoinWatchApiClientTest extends TestCase
{
    public function test_the_api_call_overview_returns_a_successful_response(): void
    {
        $liveCoinWatchApiClient = new LiveCoinWatchApiClient();
        $actual = $liveCoinWatchApiClient->overview();

        $this->assertIsString($actual);

        $actual = json_decode($actual, true);

        $this->assertArrayHasKey('cap', $actual);
        $this->assertArrayHasKey('volume', $actual);
        $this->assertArrayHasKey('liquidity', $actual);
        $this->assertArrayHasKey('btcDominance', $actual);
    }

    public function test_the_api_call_overview_history_returns_a_successful_response(): void
    {
        $liveCoinWatchApiClient = new LiveCoinWatchApiClient();
        $objDateTime = new DateTime();
        $endDate = $objDateTime->format('Uv');
        $startDate = $objDateTime->sub(new DateInterval('P1D'))->format('Uv');
        $actual = $liveCoinWatchApiClient->overviewHistory($startDate, $endDate);

        $this->assertIsString($actual);

        $actual = json_decode($actual, true);
        $actual = current($actual);

        $this->assertArrayHasKey('date', $actual);
        $this->assertArrayHasKey('cap', $actual);
        $this->assertArrayHasKey('volume', $actual);
        $this->assertArrayHasKey('liquidity', $actual);
        $this->assertArrayHasKey('btcDominance', $actual);
    }
}

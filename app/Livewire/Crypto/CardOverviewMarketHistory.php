<?php

namespace App\Livewire\Crypto;

use App\Http\Clients\LiveCoinWatchApiClient;
use DateInterval;
use DateTime;
use Livewire\Component;

class CardOverviewMarketHistory extends Component
{
    public array $capData = [];
    public array $mainSeriesCombined = [];
    public array $volumeData = [];
    public array $liquidityData = [];
    public array $btcDominanceData = [];
    public array $categoriesData = [];
    public string $startDate = '';
    public string $endDate = '';

    public function mount()
    {
        $objDateTime = new DateTime();
        $this->endDate = $objDateTime->format('Y-m-d');
        $this->startDate = $objDateTime->sub(new DateInterval('P30D'))->format('Y-m-d');

        $rawData = $this->getDataApi();

        $this->setDataProperties($rawData);
    }

    public function render()
    {
        return view(
            'livewire.crypto.card-overview-market-history'
        );
    }

    private function convertDateToUnixTimeStamp(string $date, string $format = 'Y-m-d'): string
    {
        $objDateTime = DateTime::createFromFormat($format, $date);

        return $objDateTime->format('Uv');
    }

    public function getDataApi(): array
    {
        $liveCoinWatchApiClient = new LiveCoinWatchApiClient();

        return json_decode(
            $liveCoinWatchApiClient->overviewHistory(
                $this->convertDateToUnixTimeStamp($this->startDate),
                $this->convertDateToUnixTimeStamp($this->endDate)
            ),
            true
        );
    }

    public function setDataProperties(array $data): void
    {
        $this->categoriesData = array_column($data, 'date');
        $this->capData = array_column($data, 'cap');

        $this->volumeData = array_column($data, 'volume');

        $this->btcDominanceData = array_map(function ($percent, $value) {
            return $percent * $value;
        }, array_column($data, 'btcDominance'), $this->capData);

        foreach ($this->categoriesData as $key => $value) {
            $this->mainSeriesCombined[$key] = [$value, $this->capData[$key]];
        }
        $this->liquidityData = array_column($data, 'liquidity');
    }
}

<?php

namespace App\Livewire\Crypto;

use App\Http\Clients\LiveCoinWatchApiClient;
use LaravelReady\ReadableNumbers\Facades\ReadableNumbers;
use Livewire\Component;
use NumberFormatter;

class CardOverviewMarket extends Component
{
    public ?string $cap = null;
    public ?string $volume = null;
    public ?string $liquidity = null;
    public ?string $btcDominance = null;

    public function mount()
    {
        $liveCoinWatchApiClient = new LiveCoinWatchApiClient();
        extract(json_decode(
            $liveCoinWatchApiClient->overview(),
            true
        ));

        $this->cap = ReadableNumbers::make($cap);
        $this->volume = ReadableNumbers::make($volume);
        $this->liquidity = ReadableNumbers::make($liquidity);
        $this->btcDominance = number_format(($btcDominance * 100), 2);
    }

    public function render()
    {
        return view('livewire.crypto.card-overview-market');
    }
}

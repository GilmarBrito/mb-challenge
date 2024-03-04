<?php

namespace App\Livewire\Crypto;

use App\Models\CryptoCurrency;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public string $search = "";

    public function render()
    {
        $cryptos = CryptoCurrency::query()
            ->when(
                $this->search !== '',
                fn (Builder $query) => $query
                    ->where('code', 'like', '%' . $this->search . '%')
                    ->orWhere('coin_name', 'like', '%' . $this->search . '%')
                    ->orWhere('algorithm', 'like', '%' . $this->search . '%')
                    ->orWhere('proof_type', 'like', '%' . $this->search . '%')
            )
            ->paginate(10);

        return view('livewire.crypto.table', [
            'cryptos' => $cryptos
        ]);
    }

    public function updating($key): void
    {
        if ($key === 'search') {
            $this->resetPage();
        }
    }
}

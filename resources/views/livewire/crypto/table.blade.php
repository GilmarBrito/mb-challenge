<div class="container">
    <div class="form-group has-search">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Search" wire:model.live='search'>
    </div>
    <div class="table-responsive overflow-x-auto">
        <table class="table table-responsive table-hover">
            <thead>
                <tr class="bg-light">
                    <th scope="col">Code</th>
                    <th scope="col">Coin Name</th>
                    <th scope="col">Algorithm</th>
                    <th scope="col">Is trading?</th>
                    <th scope="col">Proof Type</th>
                    <th scope="col" class="text-end"><span>Total Coins Mined</span></th>
                    <th scope="col" class="text-end"><span>Total Coin Supply</span></th>
                </tr>
            </thead>
            <tbody>
                @forelse($cryptos as $crypto)
                    <tr>
                        <td>{{ $crypto->code }}</td>
                        <td>{{ $crypto->coin_name }}</td>
                        <td>{{ $crypto->algorithm }}</td>
                        <td>{{ $crypto->is_trading }}</td>
                        <td>{{ $crypto->proof_type }}</td>
                        <td class="text-end">{{ $crypto->total_coins_mined }}</td>
                        <td class="text-end">{{ $crypto->total_coin_supply }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-6 py-4 text-sm" colspan="7">
                            No cryptos were found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    {{$cryptos->links()}}
</div>

<div class="col-lg-12">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-cart-full"></i>
                </div>
                <div class="content text-wrap">
                    <h6 class="mb-10">Market Cap</h6>
                    <h4 wire:poll.5s class="text-bold mb-10">${{ $cap }}</h4>
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon success">
                    <i class="lni lni-dollar"></i>
                </div>
                <div class="content text-wrap">
                    <h6 class="mb-10">BTC Dominance</h6>
                    <h4 wire:poll.5s class="text-bold mb-10">{{ $btcDominance }}%</h4>
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon primary">
                    <i class="lni lni-credit-cards"></i>
                </div>
                <div class="content text-wrap">
                    <h6 class="mb-10">24H Volume</h6>
                    <h4 wire:poll.5s class="text-bold mb-10">${{ $volume }}</h4>
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->

        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon orange">
                    <i class="lni lni-user"></i>
                </div>
                <div class="content text-wrap">
                    <h6 class="mb-10">Liquidity ±2%</h6>
                    <h4 wire:poll.5s class="text-bold mb-10">${{ $liquidity }}</h4>
                </div>
            </div>
            <!-- End Icon Cart -->
        </div>
        <!-- End Col -->
    </div>
</div>
<!-- End Col -->

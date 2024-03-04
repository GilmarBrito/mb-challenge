<div class="col-lg-12">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card-style mb-30">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-sm-12">
                        <div wire:ignore id="chart-area"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @assets
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @endassets
    @script
    <script type="text/javascript">

        let USDollar = new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD',
            maximumFractionDigits: 2,
            minimumFractionDigits: 2,
            notation: "compact" ,
            compactDisplay: "long",
            });



        let chartArea = new ApexCharts(
            document.querySelector("#chart-area"),
            createOptions(
                @json($categoriesData),
                @json($capData),
                @json($btcDominanceData),
                @json($volumeData),
        ));
        chartArea.render();

        function createOptions (categories, capData, btcDominanceData, volumeData)
        {
            let optionsArea = {
                chart: {
                    id: 'area-1',
                    group: 'coins',
                    height: 400,
                    type: 'area',
                    stacked: false
                },
                series: [
                    {
                        name: 'Market Cap',
                        type: 'area',
                        data: capData,
                    },
                    {
                        name: 'BTC Dominance',
                        type: 'area',
                        data: btcDominanceData,
                    },
                    {
                        name: '24H Volume',
                        type: 'column',
                        data: volumeData,
                    },
                ],
                colors: ['#2E93fA', '#FF9800', '#546E7A', '#E91E63', , '#66DA26', '#546E7A', '#E91E63', ],
                responsive: [
                    {
                        breakpoint: 500,
                        options: {
                            legend: {
                                fontSize: "11px"
                            }
                        }
                    }
                ],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [1, 1, 5]
                },
                title: {
                    text: 'Crypto Market Cap (last 30 days)',
                    align: 'left',
                    offsetX: 110
                },
                xaxis: {
                    categories: categories,
                    type: 'datetime',
                },
                yaxis: [
                    {
                        seriesName: 'Market Cap',
                        axisTicks: {
                            show: false,
                        },
                        axisBorder: {
                            show: true,
                        },
                        labels: {
                            formatter: (value) => {
                                return USDollar.format(value)
                            },
                        },
                        title: {
                            text: "Market Cap x BTC Dominance",
                        }
                    },
                    {
                        seriesName: 'Market Cap',
                        show: false,
                        labels: {
                            formatter: (value) => {
                                return USDollar.format(value)
                            },
                        },
                    },
                    {
                        seriesName: '24H Volume',
                        opposite: true,
                        axisTicks: {
                            show: true,
                        },
                        axisBorder: {
                            show: true,
                        },
                        labels: {
                            formatter: (value) => {
                                return USDollar.format(value)
                            },
                        },
                        title: {
                            text: "Operating Volume (last 24H)",
                        },
                    },
                ],
                tooltip: {
                    fixed: {
                        enabled: true,
                        position: 'topLeft', // topRight, topLeft, bottomRight,     bottomLeft
                        offsetY: 30,
                        offsetX: 100
                    },
                },
                legend: {
                    horizontalAlign: 'center',
                    position: 'bottom',
                    containerMargin: {
                        top: 30
                    },
                    show: true,
                    showForSingleSeries: true,
                }
            };

            return optionsArea;
        };



        $wire.on('refreshChart', () => {

            chartArea.updateSeries([
                {
                    name: 'Market Cap',
                    type: 'area',
                    data: @json($capData),
                },
                {
                    name: 'BTC Dominance',
                    type: 'area',
                    data: @json($btcDominanceData),
                },
                {
                    name: '24H Volume',
                    type: 'column',
                    data:  @json($volumeData),
                },
            ]);

            chartArea.render();


        });

    </script>
    @endscript
</div>
<!-- End Col -->

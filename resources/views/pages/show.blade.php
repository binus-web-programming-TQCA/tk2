@extends('layout.master')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>This is grafik</h1>
        <div class="card">
            <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex">
                    <p class="d-flex flex-column">
                        <span class="text-bold text-lg">$18,230.00</span>
                        <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                        </span>
                        <span class="text-muted">Since last month</span>
                    </p>
                </div>

                <div class="position-relative mb-4">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="sales-chart" height="200" style="display: block; width: 857px; height: 200px;"
                            width="857" class="chartjs-render-monitor"></canvas>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                    </span>
                    <span>
                    <i class="fas fa-square text-gray"></i> Last year
                    </span>
                </div>
            </div>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="far fa-chart-bar"></i>
                    Bar Chart
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="160.83638139204544" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="298.0213068181818" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="429.8536931818182" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="559.4473100142045" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="36.23299893465909" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="684.0912198153409" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.9521484375" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
            </div>

        </div>

        <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Video</label>
                    <input type="text" class="form-control" name="nama_file" id="nama_file"
                           value="{{ old('nama_file') }}" required placeholder="nama Video">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="video" id="video" accept="video/mp4"
                                   required>
                            <label class="custom-file-label" for="video">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        /*
         * BAR CHART
         * ---------
         */

        var dataGrade = @json($data);

        var bar_data = {
            data : [[1,dataGrade.A], [2,dataGrade.B], [3,dataGrade.C], [4,dataGrade.D]],
            bars: { show: true }
        }

        $.plot('#bar-chart', [bar_data], {
            grid  : {
                borderWidth: 1,
                borderColor: '#f3f3f3',
                tickColor  : '#f3f3f3'
            },
            series: {
                bars: {
                    show: true, barWidth: 0.5, align: 'center',
                },
            },
            colors: ['#3c8dbc'],
            xaxis : {
                ticks: [[1,'A'], [2,'B'], [3,'C'], [4,'D']]
            }
        })
        /* END BAR CHART */
    </script>
@endsection

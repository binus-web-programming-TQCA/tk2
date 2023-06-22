@extends('layout.master')
@section('content')

    <div class="card card-primary card-outline mt-3">
        <div class="card-header">
            <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Grafik Grade Mahasiswa
            </h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body">
            <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><canvas class="flot-overlay" width="763" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 763.5px; height: 300px;"></canvas><div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;"><g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="160.83638139204544" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">February</text><text x="298.0213068181818" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">March</text><text x="429.8536931818182" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">April</text><text x="559.4473100142045" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">May</text><text x="36.23299893465909" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">January</text><text x="684.0912198153409" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">June</text></g><g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="8.9521484375" y="205.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">5</text><text x="1" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="142" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">10</text><text x="1" y="78.5" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">15</text></g></svg></div></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">List Grade Mahasiswa</h3>
                </div>

                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Nilai Akhir</th>
                            <th>Grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($listMahasiswa as $n => $mahasiswa)
                            <tr>
                                <td>{{$mahasiswa->id}}</td>
                                <td>{{$mahasiswa->name}}</td>
                                <td>{{$mahasiswa->nilai_akhir}}</td>
                                <td>{{$mahasiswa->grade}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
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

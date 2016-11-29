
<!-- Core  -->
<script src="{{asset('assets/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/animsition/jquery.animsition.js')}}"></script>
<script src="{{asset('assets/vendor/asscroll/jquery-asScroll.js')}}"></script>
<script src="{{asset('assets/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/vendor/asscrollable/jquery.asScrollable.all.js')}}"></script>
<script src="{{asset('assets/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('assets/vendor/switchery/switchery.min.js')}}"></script>
<script src="{{asset('assets/vendor/intro-js/intro.js')}}"></script>
<script src="{{asset('assets/vendor/screenfull/screenfull.js')}}"></script>
<script src="{{asset('assets/vendor/slidepanel/jquery-slidePanel.js')}}"></script>

<script src="{{asset('assets/vendor/skycons/skycons.js')}}"></script>
<script src="{{asset('assets/vendor/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('assets/vendor/aspieprogress/jquery-asPieProgress.min.js')}}"></script>
<script src="{{asset('assets/vendor/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js')}}"></script>
<script src="{{asset('assets/vendor/matchheight/jquery.matchHeight-min.js')}}"></script>

<!-- Scripts -->
<script src="{{asset('assets/js/core.js')}}"></script>
<script src="{{asset('assets/js/site.js')}}"></script>

<script src="{{asset('assets/js/sections/menu.js')}}"></script>
<script src="{{asset('assets/js/sections/menubar.js')}}"></script>
<script src="{{asset('assets/js/sections/sidebar.js')}}"></script>

<script src="{{asset('assets/js/configs/config-colors.js')}}"></script>
<script src="{{asset('assets/js/configs/config-tour.js')}}"></script>

<script src="{{asset('assets/js/components/asscrollable.js')}}"></script>
<script src="{{asset('assets/js/components/animsition.js')}}"></script>
<script src="{{asset('assets/js/components/slidepanel.js')}}"></script>
<script src="{{asset('assets/js/components/switchery.js')}}"></script>
<script src="{{asset('assets/js/components/matchheight.js')}}"></script>
<script src="{{asset('assets/js/components/jvectormap.js')}}"></script>

<script>
    $(document).ready(function($) {
        Site.run();

        (function() {
            var snow = new Skycons({
                "color": $.colors("blue-grey", 500)
            });
            snow.set(document.getElementById("widgetSnow"), "snow");
            snow.play();

            var sunny = new Skycons({
                "color": $.colors("blue-grey", 700)
            });
            sunny.set(document.getElementById("widgetSunny"), "clear-day");
            sunny.play();
        })();

        (function() {
            var lineareaColor = new Chartist.Line(
                    '#widgetLineareaColor .ct-chart', {
                        labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                        series: [
                            [4, 4.5, 4.3, 4, 5, 6, 5.5],
                            [3, 2.5, 3, 3.5, 4.2, 4, 5],
                            [1, 2, 2.5, 2, 3, 2.8, 4]
                        ]
                    }, {
                        low: 0,
                        showArea: true,
                        showPoint: false,
                        showLine: false,
                        fullWidth: true,
                        chartPadding: {
                            top: 0,
                            right: 0,
                            bottom: 0,
                            left: 0
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });
        })();

        (function() {
            var stacked_bar = new Chartist.Bar(
                    '#widgetStackedBar .ct-chart', {
                        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
                            'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
                            'V', 'W', 'X', 'Y', 'Z'
                        ],
                        series: [
                            [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                                100, 140, 130, 120, 135, 110, 120, 105, 100, 105,
                                90, 110, 100, 60
                            ],
                            [150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
                                180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
                                200, 205, 190, 210, 200, 160
                            ]
                        ]
                    }, {
                        stackBars: true,
                        fullWidth: true,
                        seriesBarDistance: 0,
                        chartPadding: {
                            top: 0,
                            right: 30,
                            bottom: 30,
                            left: 20
                        },
                        axisX: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        },
                        axisY: {
                            showLabel: false,
                            showGrid: false,
                            offset: 0
                        }
                    });
        })();

        // timeline
        // --------
        (function() {
            var timeline_labels = [];
            var timeline_data1 = [];
            var timeline_data2 = [];
            var totalPoints = 20;
            var updateInterval = 1000;
            var now = new Date().getTime();

            function GetData() {
                timeline_labels.shift();
                timeline_data1.shift();
                timeline_data2.shift();

                while (timeline_data1.length < totalPoints) {
                    var x = Math.random() * 100 + 800;
                    var y = Math.random() * 100 + 400;
                    timeline_labels.push(now += updateInterval);
                    timeline_data1.push(x);
                    timeline_data2.push(y);
                }
            }

            var timlelineData = {
                labels: timeline_labels,
                series: [
                    timeline_data1,
                    timeline_data2
                ]
            };

            var timelineOptions = {
                low: 0,
                showArea: true,
                showPoint: false,
                showLine: false,
                fullWidth: true,
                chartPadding: {
                    top: 0,
                    right: 0,
                    bottom: 0,
                    left: 0
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            };
            new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
                    timelineOptions);

            function update() {
                GetData();

                new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
                        timelineOptions);
                setTimeout(update, updateInterval);
            }

            update();

        })();

        (function() {
            new Chartist.Line("#widgetLinepoint .ct-chart", {
                labels: ['1', '2', '3', '4', '5', '6'],
                series: [
                    [1, 1.5, 0.5, 2, 2.5, 1.5]
                ]
            }, {
                low: 0,
                showArea: false,
                showPoint: true,
                showLine: true,
                fullWidth: true,
                lineSmooth: false,
                chartPadding: {
                    top: -10,
                    right: -4,
                    bottom: 10,
                    left: -4
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            });
        })();

        (function() {
            new Chartist.Bar("#widgetSaleBar .ct-chart", {
                labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
                    'L', 'M', 'N', 'O', 'P', 'Q'
                ],
                series: [
                    [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                        100, 140, 130, 120
                    ]
                ]
            }, {
                low: 0,
                fullWidth: true,
                chartPadding: {
                    top: -10,
                    right: 20,
                    bottom: 30,
                    left: 20
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            });
        })();

        (function() {
            new Chartist.Bar("#widgetWatchList .small-bar-one", {
                labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
                series: [
                    [50, 90, 100, 90, 110, 100, 120, 130]
                ]
            }, {
                low: 0,
                fullWidth: true,
                chartPadding: {
                    top: -10,
                    right: 0,
                    bottom: 0,
                    left: 20
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            });

            new Chartist.Bar("#widgetWatchList .small-bar-two", {
                labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
                series: [
                    [50, 90, 100, 90, 110, 100, 120, 120]
                ]
            }, {
                low: 0,
                fullWidth: true,
                chartPadding: {
                    top: -10,
                    right: 0,
                    bottom: 0,
                    left: 20
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            });

            new Chartist.Line("#widgetWatchList .line-chart", {
                labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
                series: [
                    [20, 50, 70, 110, 100, 200, 230],
                    [50, 80, 140, 130, 150, 110, 160]
                ]
            }, {
                low: 0,
                showArea: false,
                showPoint: false,
                showLine: true,
                lineSmooth: false,
                fullWidth: true,
                chartPadding: {
                    top: 0,
                    right: 10,
                    bottom: 0,
                    left: 10
                },
                axisX: {
                    showLabel: true,
                    showGrid: false,
                    offset: 30
                },
                axisY: {
                    showLabel: true,
                    showGrid: true,
                    offset: 30
                }
            });
        })();

        (function() {
            new Chartist.Line("#widgetLinepointDate .ct-chart", {
                labels: ['1', '2', '3', '4', '5', '6'],
                series: [
                    [1, 1.5, 0.5, 2, 2.5, 1.5]
                ]
            }, {
                low: 0,
                showArea: false,
                showPoint: true,
                showLine: true,
                fullWidth: true,
                lineSmooth: false,
                chartPadding: {
                    top: 0,
                    right: -4,
                    bottom: 10,
                    left: -4
                },
                axisX: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                },
                axisY: {
                    showLabel: false,
                    showGrid: false,
                    offset: 0
                }
            });

        })();

    });
</script>
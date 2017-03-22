                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">

                            <div class="col-lg-12">
                                    
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">Influencer by Instagram Follow <i class="fa fa-instagram"></i></div>
                                        <div class="tools"><i class="fa fa-chevron-up"></i><!--i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i--><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bar-chart" style="width: 100%; height:400px"></div>
                                    </div>
                                </div>
                                    
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">Influencer by Faebook likes <i class="fa fa-facebook-square"></i></div>
                                        <div class="tools"><i class="fa fa-chevron-up"></i><!--i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i--><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bar-chart-fb" style="width: 100%; height:400px"></div>
                                    </div>
                                </div>

                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">Influencer Comparison <i class="fa fa-facebook-square"></i></div>
                                        <div class="tools"><i class="fa fa-chevron-up"></i><!--i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i--><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="bar-chart-mix" style="width: 100%; height:400px"></div>
                                    </div>
                                </div>

                          </div>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
<script>


$(function () {
    $('#bar-chart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Number of Instagram Influencer'
        },
        subtitle: {
            text: 'Source:dtkad.com (<?php echo date('d/m/Y',time())?>) '
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number (people)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.y:.0f} people</b>'
        },
        plotOptions: {
            series:{
                color: '#964B00'
            }
        },
        series: [{
            name: 'Population',
            data: [
            <?php   foreach ($followers as $month => $follower) {
                        echo '["'.$month.'",'.$follower.'],';
                    }
            ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#FFFFFF',
                align: 'center',
                format: '{point.y:.0f}', // one decimal
                y: 20, // 20 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });



    $('#bar-chart-fb').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Number of Facebook Influencer'
        },
        subtitle: {
            text: 'Source:dtkad.com (<?php echo date('d/m/Y',time())?>) '
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Number (people)',
            format: '{point.y.0f}'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<b>{point.y:.0f} people</b>'
        },
        plotOptions: {
            series:{
                color: '#47639E'
            }
        },
        series: [{
            name: 'Population',
            data: [
            <?php   foreach ($likes as $month => $like) {
                        echo '["'.$month.'",'.$like.'],';
                    }
            ?>
            ],
            dataLabels: {
                enabled: true,
                rotation: 0,
                color: '#FFFFFF',
                align: 'center',
                format: '{point.y:.0f}', // one decimal
                y: 20, // 20 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });

    $('#bar-chart-mix').highcharts({

        chart: {
            type: 'column'
        },
        title: {
            text: 'Number Of Facebook and Instagram in comparison'
        },
        subtitle: {
            text: 'Source:dtkad.com (<?php echo date('d/m/Y',time())?>) '
        },
        xAxis: {
            categories: [
            <?php   foreach ($likes as $month => $like) {
                        echo '"'.$month.'",';
                    }
            ?>
            ],
            crosshair: true,
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
            text: 'Number (people)',
            format: '{point.y.0f}'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.0f} people</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Instagram',
                data: [
                        <?php   foreach ($followers as $month => $follower) {
                                    echo $follower.',';
                                }
                        ?>
            ],
                color: '#964B00', 

        }, {
            name: 'Facebook',
                data: [
                        <?php   foreach ($likes as $month => $like) {
                                    echo $like.',';
                                }
                        ?>
                
                ],
                color: '#47639E', 

        }]

        
    });

});



</script>

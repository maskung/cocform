                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div class="row mbl">
                            <div class="col-lg-12">
                                
                                            <div class="col-md-12">
                                                <div id="area-chart-spline" style="width: 100%; height: 300px; display: none;">
                                                </div>
                                            </div>
                                
                            </div>

                            <div class="col-lg-12">
       
							<div class="row">
								<div class="portlet box">
									<div class="portlet-header">
										<div class="caption">All</div>
										<div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
									</div>
									<div class="portlet-body">
										<div id="pie-chart" style="width: 100%; height:300px"></div>
										<!--<?php echo "Female : ".$female ?><br/>
										<?php echo "male : ".$male ?><br/>
										<?php echo "Hermaphrodite : ".$hermaphrodite ?><br/>
										<?php echo "Tom : ".$tom ?>-->
									</div>
								</div>
				 
							 </div>

							 <div class="row">
								<div class="portlet box">
									<div class="portlet-header">
										<div class="caption">Female</div>
										<div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
									</div>
									<div class="portlet-body">
										<div id="pie-chartFemale" style="width: 100%; height:300px"></div>
										<!--<?php echo "10-18 years old : ".$female10 ?><br/>
										<?php echo "19-25 years old : ".$female19 ?><br/>
										<?php echo "26-30 years old : ".$female26 ?><br/>
										<?php echo "31-35 years old : ".$female31 ?><br/>
										<?php echo "36-40 years old : ".$female36 ?><br/>
										<?php echo "40 years up : ".$female40 ?>-->
									</div>
								</div>
				 
							 </div>

							 <div class="row">
								<div class="portlet box">
									<div class="portlet-header">
										<div class="caption">Male</div>
										<div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
									</div>
									<div class="portlet-body">
										<div id="pie-chartMale" style="width: 100%; height:300px"></div>
										<!--<?php echo "10-18 years old : ".$male10 ?><br/>
										<?php echo "19-25 years old : ".$male19 ?><br/>
										<?php echo "26-30 years old : ".$male26 ?><br/>
										<?php echo "31-35 years old : ".$male31 ?><br/>
										<?php echo "36-40 years old : ".$male36 ?><br/>
										<?php echo "40 years up : ".$male40 ?>-->
									</div>
								</div>
				 
							 </div>

							 <div class="row">
								<div class="portlet box">
									<div class="portlet-header">
										<div class="caption">Hermaphrodite</div>
										<div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
									</div>
									<div class="portlet-body">
										<div id="pie-chartHer" style="width: 100%; height:300px"></div>
										<!--<?php echo "10-18 years old : ".$hermaphrodite10 ?><br/>
										<?php echo "19-25 years old : ".$hermaphrodite19 ?><br/>
										<?php echo "26-30 years old : ".$hermaphrodite26 ?><br/>
										<?php echo "31-35 years old : ".$hermaphrodite31 ?><br/>
										<?php echo "36-40 years old : ".$hermaphrodite36 ?><br/>
										<?php echo "40 years up : ".$hermaphrodite40 ?>-->
									</div>
								</div>
				 
							 </div>

							 <div class="row">
								<div class="portlet box">
									<div class="portlet-header">
										<div class="caption">Tom</div>
										<div class="tools"><i class="fa fa-chevron-up"></i><i data-toggle="modal" data-target="#modal-config" class="fa fa-cog"></i><i class="fa fa-refresh"></i><i class="fa fa-times"></i></div>
									</div>
									<div class="portlet-body">
										<div id="pie-chartTom" style="width: 100%; height:300px"></div>
										<!--<?php echo "10-18 years old : ".$tom10 ?><br/>
										<?php echo "19-25 years old : ".$tom19 ?><br/>
										<?php echo "26-30 years old : ".$tom26 ?><br/>
										<?php echo "31-35 years old : ".$tom31 ?><br/>
										<?php echo "36-40 years old : ".$tom36 ?><br/>
										<?php echo "40 years up : ".$tom40 ?>-->
									</div>
								</div>
				 
							 </div>

                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
<script>
$(function () {
	 Highcharts.setOptions({
     colors: ['#FF99FF', '#00AFFF', '#6E6EFF', '#50B432', '#FFB400', '#FF7F50', '#282828', '#CD1F48']
    });
    /* Pie Chart */
    $('#pie-chart').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'All'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'percent',
            data: [
                ['Female', <?php echo $female ?>],
                ['Male',    <?php echo $male ?>],
                /* {
                    name: 'Hermaphrodite',
                    y: <?php echo $hermaphrodite ?>,
                    sliced: true,
                    selected: true
                },*/
				['Hermaphrodite',   <?php echo $hermaphrodite ?>],
                ['Tom',   <?php echo $tom ?>],
                //['Others',   0.7]
            ]
        }]
    });
});
</script>
<!------------------------------------------------------------
	Female
-------------------------------------------------------------->
<script>
$(function () {
    /* Pie Chart */
    $('#pie-chartFemale').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Age'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'percent',
            data: [
                ['10-18', <?php echo $female10 ?>],
                ['19-25',    <?php echo $female19 ?>],
                 /*{
                    name: '26-30',
                    y: <?php echo $female26 ?>,
                    sliced: true,
                    selected: true
                },*/
				['26-30',   <?php echo $female26 ?>],
                ['31-35',   <?php echo $female31 ?>],
				['36-40',   <?php echo $female36 ?>],
				['40UP',   <?php echo $female40 ?>]
                //['Others',   0.7]
            ]
        }]
    });
});

</script>
<!------------------------------------------------------------
	Male
-------------------------------------------------------------->
<script>
$(function () {
    /* Pie Chart */
    $('#pie-chartMale').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Age'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
		series: [{
            type: 'pie',
            name: 'percent',
            data: [
                ['10-18', <?php echo $male10 ?>],
                ['19-25',    <?php echo $male19 ?>],
                /* {
                    name: '26-30',
                    y: <?php echo $male26 ?>,
                    sliced: true,
                    selected: true
                },*/
				['26-30',   <?php echo $male26 ?>],
                ['31-35',   <?php echo $male31 ?>],
				['36-40',   <?php echo $male36 ?>],
				['40UP',   <?php echo $male40 ?>]
                //['Others',   0.7]
            ]
        }]
    });
});

</script>
<!------------------------------------------------------------
	Hermaphrodite
-------------------------------------------------------------->
<script>
$(function () {
    /* Pie Chart */
    $('#pie-chartHer').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Age'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'percent',
            data: [
                ['10-18', <?php echo $hermaphrodite10 ?>],
                ['19-25',    <?php echo $hermaphrodite19 ?>],
                 /*{
                    name: '26-30',
                    y: <?php echo $hermaphrodite26 ?>,
                    sliced: true,
                    selected: true
                },*/
				['26-30',   <?php echo $hermaphrodite26 ?>],
                ['31-35',   <?php echo $hermaphrodite31 ?>],
				['36-40',   <?php echo $hermaphrodite36 ?>],
				['40UP',   <?php echo $hermaphrodite40 ?>]
                //['Others',   0.7]
            ]
        }]
    });
});

</script>
<!------------------------------------------------------------
	Tom
-------------------------------------------------------------->
<script>
$(function () {
    /* Pie Chart */
    $('#pie-chartTom').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Age'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'percent',
            data: [
                ['10-18', <?php echo $tom10 ?>],
                ['19-25',    <?php echo $tom19 ?>],
                /* {
                    name: '26-30',
                    y: <?php echo $tom26 ?>,
                    sliced: true,
                    selected: true
                },*/
				['26-30',   <?php echo $tom26 ?>],
                ['31-35',   <?php echo $tom31 ?>],
				['36-40',   <?php echo $tom36 ?>],
				['40UP',   <?php echo $tom40 ?>]
                //['Others',   0.7]
            ]
        }]
    });
});
</script>

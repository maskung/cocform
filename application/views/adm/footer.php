                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2016 © DTK-AD CO, LTD.</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
   
    <!--script src="/assets/admin/script/index.js"></script-->

    
    <!--LOADING SCRIPTS FOR CHARTS-->
    <!--script src="/assets/admin/script/highcharts.js"></script>
    <script src="/assets/admin/script/data.js"></script>
    <script src="/assets/admin/script/drilldown.js"></script>
    <script src="/assets/admin/script/exporting.js"></script>
    <script src="/assets/admin/script/highcharts-more.js"></script>
    <script src="/assets/admin/script/charts-highchart-more.js"></script>
    <script src="/assets/admin/script/charts-flotchart.js"></script-->
    <script src="/assets/admin/script/modernizr.min.js"></script>

    <!-- custom script -->
    <?php   if (isset($footer_scripts)) {
               foreach ($footer_scripts as $script) { ?>
<script src="<?php echo $script; ?>"></script>
    <?php }
     } ?>

    <!--CORE JAVASCRIPT-->
    <script src="/assets/admin/script/main.js"></script>
    
</body>
</html>

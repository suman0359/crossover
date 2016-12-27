                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2015 © PathoLogy Lab.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->

        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/jquery.app.js"></script>

        <!-- moment js  -->
        <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.js"></script>

        <!-- counters  -->
        <script src="<?php echo base_url(); ?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- sweet alert  -->
        <script src="<?php echo base_url(); ?>assets/plugins/sweetalert/dist/sweetalert.min.js"></script>


        <!-- flot Chart -->
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <!-- todos app  -->
        <script src="<?php echo base_url(); ?>assets/pages/jquery.todo.js"></script>

        <!-- chat app  -->
        <script src="<?php echo base_url(); ?>assets/pages/jquery.chat.js"></script>

        <!-- dashboard  -->
        <script src="<?php echo base_url(); ?>assets/pages/jquery.dashboard.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/notifyjs/dist/notify.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/notifications/notify-metro.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/notifications/notifications.js"></script>

        <script src="<?php echo base_url(); ?>assets/pages/form-validation-init.js"></script>

        <script src="<?php echo base_url(); ?>assets/plugins/modal-effect/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/modal-effect/js/modalEffects.js"></script>
        
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

    
    </body>
</html>



<!-- Notification -->
<?php
if (!empty($this->session->flashdata('notification'))) {

    $error = $this->session->flashdata('notification');
    $error['notification']=1;

}else{
    $error['notification']=0;
    $error['message']=null;
    $error['type']=null;
}
?>

<script type="text/javascript">
    var error_notification = "<?php echo $error['notification']; ?>";

    if (error_notification==1) {
        var error_message = "<?php echo $error['message']; ?>";
        var error_type = "<?php echo $error['type']; ?>";

        $(document).ready(function () {
            if (error_type=='success') {
                $.Notification.autoHideNotify(error_type, 'top right', error_message);
            }else if(error_type=='warning'){
                $.Notification.autoHideNotify(error_type, 'top right', error_message);
            }
        })
    }
</script>
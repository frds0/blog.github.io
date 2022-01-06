<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css?v" rel="stylesheet">
    <style type="text/css">
    body {
        padding-top: 60px;
        padding-bottom: 40px;
        background-image: url('prs.jpeg');
    }
    </style>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/themes/2/js-image-slider.css?v  " rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/themes/2/js-image-slider.js?v" type="text/javascript"></script>
    <link href="<?php echo base_url(); ?>assets/css/generic.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/me.jpeg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
        href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
    <!-- Data Table -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/DataTables/datatables.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/js/jquery.dataTables.min.js">
    </script>
    <script>
    $(document).ready(function() {
        $('#example23').DataTable({
            "lengthMenu": [
                [5, 10, 50, -1],
                [5, 10, 50, "All"]
            ]
        });
    });
    </script>
</head>
<div>
    <!-- Content -->
    <?php $this->load->view($content); ?>
    <!-- End Content -->
</div>
<br>
<br>
<br><br><br><br>
<hr>
<footer>
        <center><p><img src="<?php echo base_url(); ?>assets/images/ftr.png" width="80"> Copyright &copy; Ahmad Firdaus | Firdaus</p> </center>
</footer>

</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-transition.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-alert.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-modal.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tab.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-tooltip.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-popover.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-button.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-collapse.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-carousel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-typeahead.js"></script>

</body>

</html>
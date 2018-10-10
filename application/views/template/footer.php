    

    <!-- Jquery JS-->
    <script src="<?=base_url()?>assets_tmp/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?=base_url()?>assets_tmp/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?=base_url()?>assets_tmp/vendor/slick/slick.min.js">
    </script>
    <script src="<?=base_url()?>assets_tmp/vendor/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/animsition/animsition.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?=base_url()?>assets_tmp/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?=base_url()?>assets_tmp/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?=base_url()?>assets_tmp/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?=base_url()?>assets_tmp/js/main.js"></script>
    <?php
    if(!empty($script)){
        $this->load->view($script);
    }
    ?>
</body>

</html>
<!-- end document-->

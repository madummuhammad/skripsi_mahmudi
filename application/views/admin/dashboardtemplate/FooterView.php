<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php if($this->uri->segment(3)!=='cetak'): ?>
	<?php if ($this->uri->segment(1)!=='pengumuman'):?>
		<footer class="footer text-center"> 2023 © Mahmudi
		</footer>
	<?php endif ?>
<?php endif ?>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script> -->
<script src="<?php echo base_url('assets') ?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/bower_components/popper.js/dist/popper.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="<?php echo base_url('assets') ?>/bootstrap/dist/js/js.js"></script>
<!-- <script src="<?php echo base_url('assets') ?>/bootstrap/dist/js/bootstrap.bundle.js"></script> -->
<script src="<?php echo base_url('assets') ?>/js/app-style-switcher.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url('assets') ?>/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url('assets') ?>/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url('assets') ?>/js/custom.js"></script>
<!--This page JavaScript -->
<!--chartis chart-->
<script src="<?php echo base_url('assets') ?>/plugins/bower_components/chartist/dist/chartist.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="<?php echo base_url('assets') ?>/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>
<hr class="hr-nav">
<div class="container-fluid">
	<div class="row cont-main">
		<div class="col-md-3 cont-col-left">
			<div class="cont-navLeft">
				<?php $this->load->view('common/nav_left'); ?>			
			</div>
		</div>
		<div class="col-md-9">
			<?php $this->load->view('includes/requirements_cont'); ?>
		</div>
	</div>
</div>

<?php $this->load->view('common/footer'); ?>

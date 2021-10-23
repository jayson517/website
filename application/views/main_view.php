<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/nav'); ?>
<hr class="hr-nav">
<div class="container-fluid">
	<div class="row cont-main">
		<div class="col-md-3">
			<div class="cont-navLeft">
				<?php $this->load->view('common/nav_left'); ?>			
			</div>
		</div>
		<div class="col-md-9">
			<div class="cont-car">
				<?php $this->load->view('includes/carousel'); ?>
			</div>
			<div class="mt-3 cont-main-p">
				<p>WELCOME TO IDTOMIS HELPDESK WEBSITE!</p>
				<div style="width: 800px;">
					<p>This helps the Drug Testing Laboratories to provide quality service to the public. This site provides updates, guidelines and instructions on Drug Testing operation thru IDTOMIS. </p>
					<p><b>To all DTLs,</b> you may visit HFSRB's Website <b><a href="https://hfsrb.doh.gov.ph/">https://hfsrb.doh.gov.ph/</a></b> for more information and advisories. Stay safe!</p>
				</div>
			</div>
			<button class="btn btn-primary btn-redirectPage" style="width: 500px; border-radius: 50px;">Click here for the IDTOMIS OFFICIAL WEBSITE</button>
			<button class="btn btn-info btn btn-hfsrb" style="width: 300px; border-radius: 50px;">HFSRB OFFICIAL WEBSITE</button>
		</div>
	</div>
</div>
<div style="margin-top: 17px;"></div>
<?php $this->load->view('common/footer'); ?>

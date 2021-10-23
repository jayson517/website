<div class="cont-installers">
	<p class="p-m-installers">INSTALLERS</p>
	<div class="row">
		<div class="col-md-6 text-center">
			<a href="https://drive.google.com/file/d/1ulblDCMA0oNaV-zzA8hXOtKB9rmZXZeR/view?usp=sharing">
				<p>​<b>DTO Installer</b> (click the image below)</p>
				<img src="<?php echo base_url('assets/img/idtomis-img.jpg'); ?>" alt="">
			</a>
		</div>
		<div class="col-md-6 text-center">
			<a href="https://drive.google.com/file/d/16qAjJcCHGGP0jpaQ0zbQz7j316usLBzr/view?usp=sharing">
				<p><b>RCO Installer</b> (click the image below)</p>
				<img src="<?php echo base_url('assets/img/idtomis-img.jpg'); ?>" alt="">
			</a>
		</div>
	</div>
	<hr class="mb-5">
	<p class="p-m-updates">UPDATES</p>
	<div class="row">
		<div class="col-md-6 text-center">
			<a href="https://idtomis.weebly.com/uploads/7/6/0/5/7605026/update814.3_win7dto.exe">
				<p class="p-updates">​DTO Version 814.3</p>
				<button class="btn btn-primary"><i class="fas fa-arrow-circle-down pr-3" style="transform: scale(1.5);"></i>Download DTO Updates</button>
			</a>
		</div>
		<div class="col-md-6 text-center">
			<a href="https://idtomis.weebly.com/uploads/7/6/0/5/7605026/update810.1_win7rco.exe">
				<p class="p-updates">​RCO Version 810.1</p>
				<button class="btn btn-info"><i class="fas fa-arrow-circle-down pr-3" style="transform: scale(1.5);"></i>Download RCO Updates</button>
			</a>
		</div>
	</div>
	<hr class="mb-5">
	<div>
		<?php foreach($update_results as $update): ?>
		<?php 
			$dt = new DateTime($update->updatedDt); 
			$date = $dt->format('m/d/Y');
		?>
			<p class="text-uppercase m-0 p-0" style="font-weight: bold; font-size: 22px; color: <?php echo $update->title_color; ?>"><?php echo $update->title; ?></p>
			<p class="mt-0 mb-1 pt-0 " style="font-size: 13px;">Date Posted: <?php echo $date; ?></p>
				<?php foreach ($cont_results as $cont_res): ?>	
			<p class="p-0 my-2">
				<?php 
					if($cont_res->update_id == $update->update_id)
					{
						echo $cont_res->content;
					}
				 ?>
			 </p>
				<?php endforeach; ?>
			<p><?php
					$fileIcon = $update->file_icon;
					$fileLink = $update->file_link;
					if(!is_null($fileLink))
					{
						echo $fileLink;
					}

					if(!is_null($fileIcon))
					{
						echo $fileIcon;
					}
			 ?></p>
			<hr class="mb-5">
		<?php endforeach; ?>	
	</div>
	<p class="" style="font-size: 14px; color: red; font-weight: bold;">REMINDER: PLEASE DON'T DOWNLOAD OR EXECUTE ANY FILE UPDATE UNLESS IDTOMIS HELPDESK INSTRUCTED TO DO SO TO AVOID DATA CORRUPTION OR LOSS . KINDLY CONTACT HELPDESK IF YOU HAVE ENCOUNTERED ANY ERROR IN DTO SYSTEM. THANK YOU</p>	
</div>
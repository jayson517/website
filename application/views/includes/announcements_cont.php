<div class="cont-announcements" style="width: 800px;">
	<p>Announcements</p>
	<hr>

	<div class="cont-announcements-data">
		<?php foreach($ann_results as $ann_res): ?>
			<?php 
				$dt = new DateTime($ann_res->createdDt); 
				$date = $dt->format('m/d/Y');
			?>
			<p class="text-uppercase" style="font-weight: bold; font-size: 20px; color: <?php echo $ann_res->title_color; ?>;"><?php echo $ann_res->title; ?></p>
			<p>Date Posted: <?php echo $date; ?></p>
			<p>
			<?php foreach($cont_results as $cont_res): ?>

				<?php 
					if($cont_res->announcements_id == $ann_res->announcements_id)
					{
						echo $cont_res->contents;
					}
				 ?>

			<?php endforeach; ?>

			</p>
			<hr class="mb-5">
		<?php endforeach; ?>
	</div>

</div>
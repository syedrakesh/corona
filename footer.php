<?php
    include('last_update.php');
    include('total_confirmed.php');
?>
<div class="container">
	<div class="row">
		<div class="col-12 align-self-center">
			<div class="card-deck">
				<div class="card bg-danger m-3">
					<div class="card-header text-center text-white">সর্বমোট আক্রান্ত হয়েছেঃ <?php total_confirmed_footer();?></div>
					<!--<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text"></p>
					</div>-->
				</div>
				<div class="card bg-success m-3">
					<div class="card-header text-center text-white">সর্বশেষ হালনাগাদ হয়েছেঃ <?php last_update_checker();?></div>
					<!--<div class="card-body">
						<h5 class="card-title"></h5>
						<p class="card-text"></p>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</div>
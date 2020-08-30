<?php require('./backends/getting-started-b.php') ?>
<div class="container my-2">
	<div class=" mb-4" style="line-height: 2.4em;">
		<span>Congratulations</span>
		<span class="emphasis"><?="{$f_name}"?></span>!  on  
		<span class="emphasis"><?="<br>{$action} "?></span> 
		<p>Here are some things you should consider doing first</p>
	</div>
	<ul class="square-list" style="line-height: 2.4em;">
	<?php 
		foreach ($first_steps as $value) {
	?>
		<li><a href="<?=$value['link']?>"><?=$value['text']?></a></li>
	<?php } ?>
	</ul>
	<p class="mt-2" style="line-height: 2em;">Click any one to get started <br>Or open the menu to see more options.</p>
</div>
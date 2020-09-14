<?php
  function alert($arr) {
    if (isset($arr['error'])) {
      render('alert-danger',$arr);
		}else if (isset($arr['success'])) {
      render('alert-success',$arr);
    }
  }
?>

<?php 
  function render($type,$arr) {
?>
  <div class="alert col-sm-12 col-md-12 col-lg-7 <?=$type?>"> 
    <span class="d-block"><?=$arr['error']?></span> 
    <a href="<?=$arr['link-1']?>" class="btn btn-success mt-3"> <?=$arr['text-1']?> </a>
    <a href="<?=$arr['link-2']?>" class="btn btn-success mt-3"> <?=$arr['text-2']?> </a>
  </div>
<?php } ?>
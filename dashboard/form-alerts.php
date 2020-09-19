<?php
  function formAlert(array $arr)  {
    if (isset($arr['error']) && !strstr($arr['error'], 'already')) {
      renderAlert('danger', $arr, $arr['error'],'d-none');
		}else if (isset($arr['error']) && strstr($arr['error'], 'already')) {
      renderAlert('danger', $arr, $arr['error']);
    }else if (isset($arr['success'])) {
      renderAlert('success', $arr, $arr['success']);
    }
  }
?>

<?php 
  function renderAlert($type,array $arr,$message,$a = '') {
?>
  <div class="alert col col-lg-8 col-xl-7 mt-3 alert-<?=$type?>"> 
    <span class="d-block "><?=$message?></span> 
    <div class="<?=$a?>">
      <a href="<?=$arr['link-1']?>" class="btn btn-success mt-3"> <?=$arr['text-1']?> </a>
      <a href="<?=$arr['link-2']?>" class="btn btn-secondary mt-3 ml-3"> <?=$arr['text-2']?> </a>
    </div>
  </div>
<?php } ?>
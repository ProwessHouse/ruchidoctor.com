<div class="container"  style="text-align:center">
  <div class="row">
	<div class="col-9">
		<div class="header-content">
			<h1><?=$blog['Title']?></h1>
		</div>
			<h3><?=$blog['SubTitle']?></h3>
		<div  style="text-align:left">
		<?php echo $blog['Content']?>
		</div>  
    </div>
	<div class="col-3">
	<h4>Blogs</h4>
	<ul class="list-group" style="text-align:left">
	<?php foreach($blogs as $b){?>
	
		  <li class="list-group-item d-flex justify-content-between align-items-center">
			<a href="/blog/v/<?=str_ireplace(" ","+",$blog['Title']);?>/<?=$blog['_id']?>"><?=$b['Title']?></a>
			<span class="badge badge-primary badge-pill"><?=date('Y M',$b['DateTime']->sec)?></span></a>
		  </li>

	<?php }?>
	</ul>
	</div>
	</div>
</div>
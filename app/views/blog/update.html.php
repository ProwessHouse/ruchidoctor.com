<div class="container">
    <div class="header-content">
		<h1>Blog updated <small><a href="/blog/create/">Create</a></small></h1>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th width="50%">Title</th>
				<th width="10%">Date</th>
				<th width="10%">Status</th>
				<th width="10%">Likes</th>
				<th width="10%">Comments</th>
				<th width="10%">Action</th>
			</tr>
		</thead>
		<?php foreach($blogs as $blog){?>
			<tr>
				<td width="50%"><?=$blog['Title']?><br><small><?=$blog['SubTitle']?></small></th>
				<td width="10%"><small><?=date('YMd H:i:s', $blog['DateTime']->sec)?></small></th>
				<td width="10%"><?=$blog['Status']?></th>
				<td width="10%"><?=$blog['LikeCount']?></th>
				<td width="10%"><?=$blog['CommentCount']?></th>
				<th width="10%"> 
				<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Action
				</button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="/blog/post/<?=$blog['_id']?>">Edit</a>
					<a class="dropdown-item" href="/blog/publish/<?=$blog['_id']?>/Publish"  style="background-color:green">Publish</a>
					<a class="dropdown-item" href="/blog/publish/<?=$blog['_id']?>/Edit" style="background-color:pink">UnPublish</a>
					<a class="dropdown-item" href="/blog/deletepost/<?=$blog['_id']?>" style="background-color:red">Delete</a>
				  </div>
				</div>
				</th>
			</tr>
			<tr>
				<td><?php echo $blog['Content']?></td>
			</tr>
		<?php }?>
	</table>
</div>
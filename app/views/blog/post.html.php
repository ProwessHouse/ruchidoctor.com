<div class="container">
    <div class="header-content">
		<h1>Edit this Blog <small><a href="/blog/create/">Create</a></small> <small><a href="/blog/edit/">Edit</a></small></h1>
			
	</div>
	<form action="/blog/update" method="post" enctype="multipart/form-data" name="create" id="create">
		<input type="hidden" name="_id" id="_id" value="<?=$blog['_id']?>">
		Author:
		<select name="Author_id" id="Author_id" class="form-control">
		<?php foreach($authors as $author){?>
			<option value="<?=$author['_id']?>" <?php if($blog['_id']==$author['_id']){echo ' selected ';}?>><?=$author['Name']?></option>
		<?php }?>
		</select>
		Title:
		<input type="text" class="form-control" id="Title" name="Title" value="<?=$blog['Title']?>">
		Sub Title:
		<input type="text" class="form-control" id="SubTitle" name="SubTitle" value="<?=$blog['SubTitle']?>">
		Category:
		<input type="text" class="form-control" id="Category" name="Category" value="<?=$blog['Category']?>">
		KeyWords:
		<input type="text" class="form-control" id="KeyWords" name="KeyWords" value="<?=$blog['KeyWords']?>">
		<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
		Blog:
		<textarea name="Content" cols="60" rows="8" class="ckeditor"><?=$posts['Content']?><?php echo $blog['Content']?></textarea>
		<br>
		Likes:
		<input type="text" class="form-control" id="LikeCount" name="LikeCount" value="<?=$blog['LikeCount']?>">
		Comments:
		<input type="text" class="form-control" id="CommentCount" name="CommentCount" value="<?=$blog['CommentCount']?>">
		
		Edit:
		<input type="radio" name="Status" id='Status' class="radio-inline" value="Edit" checked/>
		Publish:
		<input type="radio" name="Status" id='Status' class="radio-inline" value="Publish"/>
		<input type="submit" value="Save" class="form-control btn btn-primary" >


	</form>
</div>
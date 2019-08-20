<div class="container">
    <div class="header-content">
		<h1>Create Blog <small><a href="/blog/edit/">Edit</a></small></h1>
			
	</div>
	<form action="/blog/create" method="post" enctype="multipart/form-data" name="create" id="create">
		Author:
		<select name="Author_id" id="Author_id" class="form-control">
		<?php foreach($authors as $author){?>
			<option value="<?=$author['_id']?>"><?=$author['Name']?></option>
		<?php }?>
		</select>
		Title:
		<input type="text" class="form-control" id="Title" name="Title">
		Sub Title:
		<input type="text" class="form-control" id="SubTitle" name="SubTitle">
		Category:
		<input type="text" class="form-control" id="Category" name="Category">
		KeyWords:
		<input type="text" class="form-control" id="KeyWords" name="KeyWords">

		<script src="//cdn.ckeditor.com/4.5.11/full/ckeditor.js"></script>
		Blog:
		<textarea name="Content" cols="60" rows="8" class="ckeditor"><?=$posts['Content']?></textarea>
		<br>
		Edit:
		<input type="radio" name="Status" id='Status' class="radio-inline" value="Edit" checked/>
		Publish:
		<input type="radio" name="Status" id='Status' class="radio-inline" value="Publish"/>
		<input type="submit" value="Save" class="form-control btn btn-primary" >


	</form>
</div>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Question Something!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="field">
    		<label>Question Title</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<div class="field">
    		<label>Body</label>
    		<textarea name="content" class="form-control"></textarea>
    	</div>
			<div class="field">
  			<label>Subject</label>
  			<div class="control">
    		<div class="select">
      		<select name="category_id">
						<option value="1">Advanced Web Dev</option>
						<option value="2">Advanced Topics in Programing</option>
						<option value="3">Android Development</option>
						<option value="4">Generals</option>
					</select>
					</div>
				</div>
			</div>

    	<div class="form-group">
    	</div>
			<div class="is-grouped">
				<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
				<a class="button is-text" href="<?php echo ROOT_URL; ?>/users/profile">Cancel</a>
			</div>
    </form>
  </div>
</div>
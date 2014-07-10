<div class="container">
	<div class="jumbotron">
		<h1>
			Welcome<br>
			<small>Please log in</small>
		</h1>
			<form method="post" action="<?php echo site_url('/security/admin'); ?>">
				<div class="form-group">
					<label for="pin">Access Pin</label>
					<input type="password" class="form-control" name="pin" id="pin" required>
				</div>
				<button type="submit" class="btn btn-default">Log In</button>
	</div>
</div>
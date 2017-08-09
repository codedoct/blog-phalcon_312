<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?= ($title ? strip_tags($this->escaper->escapeHtml($title)) : 'Untitled') ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            
	<br/>
	Hello codedoct!!!
	<br><br>
	<div class="row">
		<div class="col-md-12">
			user list:
			<br><br>
			<table width="100%">
				<tr>
					<th>Name</th>
					<th>Action</th>
				</tr>
				<?php foreach ($users as $user) { ?>
					<tr>
						<td><?= $user->name ?></td>
						<td>show | edit</td>
					</tr>
				<?php } ?>
			</table>
				
		</div>
	</div>

        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

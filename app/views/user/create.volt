{% extends 'layouts/default1.volt' %}

{% block content %}
	<br/>
	Hello codedoct!!!
	<br><br>
	<div class="row">
		<div class="col-md-12">
			<form method="POST">
				<div class="form-group">
					<label>Nama user</label>
					<input type="text" name="name" class="form-control" placeholder="Type your name" required>
				</div>
				<div class="form-group">
					<label>Email user</label>
					<input type="email" name="email" class="form-control" placeholder="Type your email" required>
				</div>
				<div class="form-group">
					<label>Address user</label>
					<textarea name="address" class="form-control" placeholder="Type your address" required></textarea>
				</div>
				<input type="submit" value="Save"> <button type="button" onclick="window.location.href='../user'">Cancel</button>
			</form>
		</div>
	</div>
{% endblock %}
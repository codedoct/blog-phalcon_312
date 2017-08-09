{% extends 'layouts/default1.volt' %}

{% block content %}
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
				{% for user in users %}
					<tr>
						<td>{{ user.name }}</td>
						<td><a href="user/{{ user.id }}">show</a> | edit</td>
					</tr>
				{% endfor %}
			</table>
				
		</div>
	</div>
{% endblock %}
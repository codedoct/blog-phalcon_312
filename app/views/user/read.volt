{% extends 'layouts/default1.volt' %}

{% block content %}
	<br/>
	Hello codedoct!!!
	<div class="row">
		<div class="col-md-12">
			user list:
			<table>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
				</tr>
				{% for user in users %}
					<tr>
						<td>{{ user.name }}</td>
						<td>{{ user.email }}</td>
						<td>{{ user.address }}</td>
					</tr>
				{% endfor %}
			</table>
				
		</div>
	</div>
{% endblock %}
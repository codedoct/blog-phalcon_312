{% extends 'layouts/default1.volt' %}

{% block content %}
	<br/>
	User Detail
	<br><br>
	<table width="100%">
		<tr>
			<td>Name</td><td>:</td><td>{{ user.name }}</td>
		</tr>
		<tr>
			<td>Email</td><td>:</td><td>{{ user.email }}</td>
		</tr>
		<tr>
			<td>Address</td><td>:</td><td>{{ user.address }}</td>
		</tr>
	</table>
	<br><br>
	<button onclick="window.location.href='../user'">Back</button>
{% endblock %}
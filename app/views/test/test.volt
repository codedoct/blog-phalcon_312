{% extends 'layouts/default1.volt' %}

{% block content %}
	<div class="row">
		<div class="col-md-12">
			Hello codedoct!!!
			<br>
			users:
			<ul>
				{% for user in data['users'] %}
					<li>{{user}}</li>
				{% endfor %}
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			gender:
			<ul>
				{% for key, value in data['genders'] %}
					<li>{{value}}</li>
				{% endfor %}
			</ul>
		</div>
	</div>

	<br>
	
{% endblock %}
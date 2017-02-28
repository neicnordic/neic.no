{% capture group_url %}/groups/{{ include.name }}/{% endcapture %}
{% assign group = site.groups | where:"url", group_url  | first %}
<ul>
{% for member in group.members %}
  {% capture person_url %}/people/{{ member[0] }}/{% endcapture %}
  {% assign person = site.people | where:"url", person_url  | first %}
  <li> <a href="mailto:{{ person.email }}">{{ person.name }}</a>{% if member[1].role %}, {{ member[1].role }}{% endif %} </li>
{% endfor %}
</ul>

{% comment %}

List info on members in a group.

Parameters:
  name: Name of the group.

{% endcomment %}
{% capture group_url %}/groups/{{ include.name }}/{% endcapture %}
{% assign group = site.groups | where:"url", group_url  | first %}
<ul>
{% for member in group.members %}
  {% capture person_url %}/people/{{ member[0] }}/{% endcapture %}
  {% assign person = site.people | where:"url", person_url  | first %}
  {% assign person_home = member[1].home | default: person.home %}
  <li> <a href="mailto:{{ person.email }}">{{ person.name }}</a>, {{ person_home }}{% if member[1].role %}, {{ member[1].role }}{% endif %} </li>
{% endfor %}
</ul>

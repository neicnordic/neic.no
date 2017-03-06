---
title: Home
permalink: /
---

## Welcome

This is an experimental website where we play around to find out how we would like
to structure our web information for easy maintenance in the future.

## News

{% assign latest_news = site.posts | slice: 0,10 %}
{% for post in latest_news %}
#### [{{ post.title }}]({{site.baseurl}}{{ post.url }})

{{ post.date | date: "%Y-%m-%d" }}

{{ post.summary }}

{% endfor %}

[See all news]({{site.baseurl}}/news/)

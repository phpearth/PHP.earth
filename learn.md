---
layout: default
permalink: "/learn/"
title: "PHP Knowledge Resources"
origin: "learn"
redirect_from:
    - "/articles/"
---

# PHP Knowledge Resources

{% include categories.html %}

{% for category in categories %}
<h2>{{ category | replace: '-', ' ' | capitalize }}</h2>
<ul>
    {% for current in site.resources %}
        {% assign item_folders = current.path | split: '/' %}
        {% if category == item_folders[1] %}
            <li><a href="{{ current.url }}">{{ current.title }}</a></li>
        {% endif %}
    {% endfor %}
</ul>
{% endfor %}

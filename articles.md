---
layout: default
permalink: /articles/index.html
title: "PHP Articles"
origin: "articles"
group: false
---

![World Wide PHP FB Group](/assets/img/fb-link.png "World Wide PHP FB Group")

# PHP Articles

<ul>
{% for current in site.resources %}
    {% if "articles" == current.group  %}
        <li>
            <a href="{{ current.url }}">{{ current.title }}</a>
        </li>
    {% endif %}
{% endfor %}
</ul>
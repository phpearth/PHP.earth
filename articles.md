---
layout: default
permalink: /articles/index.html
title: "Articles"
origin: "articles"
og_image: "assets/img/fb-link.png"
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
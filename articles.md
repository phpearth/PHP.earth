---
layout: default
permalink: /articles/index.html
title: "PHP Articles"
origin: "articles"
---

![World Wide PHP FB Group](/assets/img/fb-link.png "World Wide PHP FB Group")

# PHP Articles

<ul>
{% for current in site.resources %}
    {% assign item_folders = current.path | split: '/' %}
    {% if 'articles' == item_folders[1] %}
        <li>
            <a href="{{ current.url }}">{{ current.title }}</a>
        </li>
    {% endif %}
{% endfor %}
</ul>
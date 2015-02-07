---
layout: default
permalink: /articles/index.html
title: "Articles"
origin: "articles"
og_image: "assets/img/fb-link.png"
group: false
---
<div style="text-align:center;">
    <img src="/assets/img/fb-link.png" alt="PHP FAQ">
</div>

<h1 style="font-family:Audiowide;text-align:center">PHP Articles</h1>

<ul>
{% for current in site.resources %}
    {% if "articles" == current.group  %}
        <li>
            <a href="{{ current.url }}">{{ current.title }}</a>
        </li>
    {% endif %}
{% endfor %}
</ul>
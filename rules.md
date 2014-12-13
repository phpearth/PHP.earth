---
layout: default
title: "Do's and don'ts of the PHP Facebook Group"
origin: "rules"
og_image: "assets/img/fb-link.png"
---

<h1 style="font-family:Audiowide;text-align:center">Group rules</h1>

<h2 style="text-align: center">Do's and don'ts of the PHP Facebook group</h2>

<ul class="rules">
{% for rule in site.data.rules.rules %}
    <li>
        <h5 style="color:red"><i class="fa fa-circle-thin"></i> {{ rule.title }}</h5>
        <p>{{ rule.description }}</p>
    </li>
{% endfor %}
</ul>

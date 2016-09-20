---
layout: default
permalink: /faq/index.html
title: "Frequently Asked PHP Questions"
origin: "learn"
---

![PHP FAQ](/assets/img/fb-link.png "PHP FAQ")

# Frequently Asked PHP Questions

{% include faq.html %}

<dl class="accordion" data-accordion>
{% for category in categories %}
    <dd class="accordion-navigation">
        <a href="#{{ category }}"><i class="fa fa-arrow-right"></i><i class="fa fa-arrow-down"></i> {{ category | replace: '-', ' ' | capitalize }}</a>
        <div id="{{ category }}" class="content active">
            <ul class="side-nav">
            {% for current in site.resources %}
                {% assign url_paths = current.permalink | split: '/' %}
                {% assign folders = current.path| split: '/' %}
                {% if url_paths[1] == 'faq' and category == folders[1] %}
                    <li{% if current.title == page.title %} class="active"{% endif %}>
                        <a href="{{ current.url }}">{{ current.title }}</a>
                    </li>
                {% endif %}
            {% endfor %}
            </ul>
        </div>
    </dd>
{% endfor %}
</dl>

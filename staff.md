---
layout: default
title: "Staff of PHP Facebook Group"
origin: "admins"
og_image: "assets/img/shield.jpg"
---

<div class="row" style="padding-top:8px">
    <div class="large-12 columns">

        <div style="text-align:center;">
            <img src="/assets/img/shield.jpg" alt="shield">
        </div>

        {% for member in site.github.organization_members %}
            <div class="row" style="magin-top:8px; margin-bottom:8px;">
                <div class="large-2 columns" style="text-align:center;">
                    <a class="th" href="{{ member.html_url }}">
                        <img src="{{ member.avatar_url }}" alt="{{ member.name }}">
                    </a>
                </div>
                <div class="large-10 columns">
                    <h5>{{ member.name }}</h5>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

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
            <li><img src="{{ member.avatar_url }}" width="32" height="32" /> {{ member.login }}</li>
        {% endfor %}
    </div>
</div>

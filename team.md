---
layout: default
title: "World Wide PHP Facebook Group Team"
origin: "team"
image: "/assets/img/shield.jpg"
redirect_from:
    - "/admins/"
    - "admins.html"
    - "staff.html"
    - "staff"
---

![Team](/assets/img/shield.jpg "Team")

# Our Team

The following list contains the full set of all team members of the World Wide PHP
Facebook group:

<ul class="medium-block-grid-3">
{% for current in site.data.team %}
    <li>
        <img src="{{ current.avatar }}" alt="{{ current.name }}" class="th left" style="margin-right: 10px; max-width:75px;">

        <h5>{{ current.name }}</h5>
        {% for pos in current.position %}
        <div style="font-color: #eee; margin-top: -.5rem;"><small>{{ pos }}</small></div>
        {% endfor %}
        {% if current.facebook_id %}
            <a href="https://facebook.com/{{ current.facebook_id }}" title="Facebook"><i class="fa fa-facebook-official"></i></a>
        {% endif %}
        {% if current.github %}
            <a href="https://github.com/{{ current.github }}" title="GitHub"><i class="fa fa-github"></i></a>
        {% endif %}
        {% if current.twitter %}
            <a href="https://twitter.com/{{ current.twitter }}" title="Twitter"><i class="fa fa-twitter"></i></a>
        {% endif %}
        {% if current.linkedin %}
            <a href="{{ current.linkedin }}" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a>
        {% endif %}
        {% if current.web %}
            <a href="{{ current.web }}" title="Website"><i class="fa fa-external-link-square"></i></a>
        {% endif %}
        {% if current.ieee %}
            <a href="{{ current.ieee }}" title="IEEE"><img src="/assets/img/ieee.svg" alt="IEEE" width="20px"></a>
        {% endif %}
    </li>
{% endfor %}
</ul>

## How to Become a Team Member?

To get involved please check the [getting involved](/get-involved) guide and get
in touch with us for further discussion. Team members are carefully selected by
the current administration staff.

## What are Administrators and Moderators?

Our group is moderated by administrators and moderators, all of them have the same
rights, all of them have the same duties: **protect you**.

## Can Administrators and Moderators Do What They Want?

No, truly not. We are a kind of a collective and work together. Things that may
have a deep impact to our community or the staff themselves would be discussed
and decided inside of this collective.

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '566418756821183',
    xfbml      : true,
    version    : 'v2.7'
    });
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

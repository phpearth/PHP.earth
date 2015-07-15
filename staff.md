---
layout: default
title: "PHP Facebook Group Team"
origin: "staff"
og_image: "assets/img/shield.jpg"
redirect_from:
    - "/admins/"
    - "admins.html"
---

<div class="row" style="padding-top:8px">
    <div class="large-12 columns">

        <div style="text-align:center;">
            <img src="/assets/img/shield.jpg" alt="shield">
        </div>

        <h4>What are group administrators?</h4>

        <p>Our group is moderated by administrators, all of them have the same rights, all of them have the same duties: <strong>protect you</strong>.</p>

        <h4>How to become a group administrator?</h4>

        <p>We do not have any public vote system or a place to apply an application to become an administrator. Administrators are carefully selected by the current administration staff. If we decide to recruit more administrators we will talk to our nominees, maybe one day to you.</p>

        <h4>Can administrators do what they want?</h4>

        <p>No, trully not. We are a kind of a collective and work together. Things that may have a deep impact to our community or the staff themself would be discussed and decided inside of this collective.</p>

        <h4>Our Administrators</h4>

        <p>The following list contains the full set of all administrators of our group.</p>

        {% for current in site.data.team %}
        {% if current.teams contains 'admin' %}
        <div class="row" style="magin-top:8px; margin-bottom:8px;">
        <div class="large-2 columns" style="text-align:center;">
            <img src="{{ current.avatar }}" alt="{{ current.name }}" class="th">
        </div>
        <div class="large-10 columns">
            <h5>{{ current.name }}</h5>

            {% if current.facebook_id %}
                <a href="https://facebook.com/{{ current.facebook_id }}"><i class="fa fa-facebook-official"></i></a>
            {% endif %}
            {% if current.github %}
                <a href="https://github.com/{{ current.github }}"><i class="fa fa-github"></i></a>
            {% endif %}
            {% if current.twitter %}
                <a href="https://twitter.com/{{ current.twitter }}"><i class="fa fa-twitter"></i></a>
            {% endif %}
        </div>
        </div>
        {% endif %}
        {% endfor %}

        <h4>Our PHP Resources Core Team</h4>

        <p>Maintaining FAQ, tutorials and other documentation for the group is a hard and never ending work indeed. Maintaining this part of the group is done mainly by:</p>

        {% for current in site.data.team %}
        {% if current.teams contains 'docs' %}
        <div class="row" style="magin-top:8px; margin-bottom:8px;">
        <div class="large-2 columns" style="text-align:center;">
            <img src="{{ current.avatar }}" alt="{{ current.name }}" class="th">
        </div>
        <div class="large-10 columns">
            <h5>{{ current.name }}</h5>

            {% if current.facebook_id %}
                <a href="https://facebook.com/{{ current.facebook_id }}"><i class="fa fa-facebook-official"></i></a>
            {% endif %}
            {% if current.github %}
                <a href="https://github.com/{{ current.github }}"><i class="fa fa-github"></i></a>
            {% endif %}
            {% if current.twitter %}
                <a href="https://twitter.com/{{ current.twitter }}"><i class="fa fa-twitter"></i></a>
            {% endif %}
        </div>
        </div>
        {% endif %}
        {% endfor %}

    </div>
</div>

<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
  FB.init({
    appId      : '566418756821183',
    xfbml      : true,
    version    : 'v2.0'
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

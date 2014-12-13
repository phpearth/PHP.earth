---
layout: default
title: "Administrators of PHP Facebook Group"
origin: "admins"
og_image: "assets/img/shield.jpg"
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

        <p>The following list contains the full set of all administrators of our group. The profiles of them are linked along the profile images:</p>

        {% for current in site.admins %}
        {% if current.active %}
        <div class="row" style="magin-top:8px; margin-bottom:8px;">
        <div class="large-2 columns" style="text-align:center;">
        <a class="th" href="https://facebook.com/{{ current.profile-id }}">
        <img src="http://graph.facebook.com/{{ current.profile-id }}/picture" alt="{{ current.name }}">
        </a>
        </div>
        <div class="large-10 columns">
        <h5>{{ current.name }}</h5>
        </div>
        </div>
        {% endif %}
        {% endfor %}

        <h4>Inactive administrators</h4>

        <p>We also want to thank our previous administrator of this group.</p>

        {% for current in site.admins %}
        {% if current.active == false %}
        <div class="row" style="magin-top:8px; margin-bottom:8px;">
        <div class="large-2 columns" style="text-align:center;">
        <a class="th" href="https://facebook.com/{{ current.profile-id }}">
        <img src="http://graph.facebook.com/{{ current.profile-id }}/picture" alt="{{ current.name }}">
        </a>
        </div>
        <div class="large-10 columns">
        <h5>{{ current.name }}</h5>
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

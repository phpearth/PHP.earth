---
layout: default
title: 'Getting Started'
origin: "getting-started"
---

{% assign faqs = 0 %}
{% for current in site.resources %}
    {% assign items = current.permalink | split: '/' %}
    {% if 'faq' == items[1] %}
        {% assign faqs=faqs | plus:1 %}
    {% endif %}
{% endfor %}

<div class="row">
    <div class="large-12 columns" style="margin-top:8px">
        <p><img src="assets/img/elephpant.png" alt="an elephant, trust me."></p>

        <h1 style="font-family:Audiowide;text-align:center">Welcome Developer</h1>

        <p style="text-align: center">on the pages of the <strong>World Wide PHP Facebook Group</strong>.</p>

        <p>These pages will show you our rules, a qualified FAQ containing most
        asked questions, and an overview who represents the group.</p>

    </div>
</div>

<div class="row" data-equalizer="bar">
    <div class="large-4 columns">
        <div class="panel" data-equalizer-watch="bar">
            <h5><a href="/code-of-conduct/" style="color: red"><i class="fa fa-circle-thin"></i> Code of Conduct</a></h5>

            <p>First keep in mind that you accept the rules of our group if you request a membership. We appreciate good values and quality. Thank you!</p>
        </div>
    </div>
    <div class="large-4 columns">
        <div class="panel" data-equalizer-watch="bar">
            <h5><a href="/articles/how-to-ask-smart-questions/"><i class="fa fa-circle-thin"></i> How to Ask Smart Questions</a></h5>

            <p>Tutorial how to ask smart question in tech communities such as this.</p>
        </div>
    </div>
    <div class="large-4 columns">
        <div class="panel" data-equalizer-watch="bar">
            <h5><a href="/faq"><i class="fa fa-circle-thin"></i> Frequently Asked Questions</a></h5>

            <p>{{ faqs }} most frequently asked PHP questions from our daily discovery with qualified and unbiased answers.</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="large-12 columns">

    </div>
</div>

<div class="row">
    <div class="large-12 columns" style="margin-top:16px; margin-bottom:16px; text-align:center;">
        Have a good time in our group and don't be shy to ask your question.
    </div>
</div>
<div class="row">
    <div class="large-12 columns" style="margin-top:16px; margin-bottom:20px; text-align:center;">
        &laquo;Stay hungry, stay foolish.&raquo; <small><cite><a href="http://news.stanford.edu/news/2005/june15/jobs-061505.html">2005 - Steve Jobs &dagger;</a></cite></small>
    </div>
</div>

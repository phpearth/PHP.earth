---
layout: default
title: 'Getting Started'
origin: "getting-started"
---

{% assign faqs = 0 %}
{% for current in site.resources %}
    {% if "articles" != current.group and "practices" != current.group %}
        {% assign faqs=faqs | plus:1 %}
    {% endif %}
{% endfor %}

{% assign articles = 0 %}
{% for current in site.resources %}
    {% if "articles" == current.group %}
        {% assign articles=articles | plus:1 %}
    {% endif %}
{% endfor %}

<div class="row">
    <div class="large-12 columns" style="margin-top:8px">
        <p><img src="assets/img/elephpant.png" alt="an elephant, trust me."></p>
        <h3 style="font-family:Audiowide;text-align:center">Welcome developer</h3>
        <p>to the GitHub Pages of the <strong>international PHP Facebook Group</strong>,
        the following pages will show you our rules, a qualified FAQ containing
        most asked questions from our daily discoveries in our group, most wanted PHP
        tutorials, some PHP articles, information on how to get properly involved and a small
        overview who is representing the group as its staff.</p>
        <p>But first, keep in mind that you accept the <a href="/code-of-conduct/">following rules</a> of our group if you request a membership.</p>
    </div>
</div>

<div class="row">
    <div class="large-4 columns">
        <h5><a href="/articles"><i class="fa fa-circle-thin"></i> PHP articles ({{ articles }})</a></h5>
        <p>Some of the most wanted tutorials and articles which will help you get started with PHP or learn something new. Sometimes you want to learn something more advanced about PHP.</p>
    </div>
    <div class="large-4 columns">
        <h5><a href="/faq"><i class="fa fa-circle-thin"></i> Frequently asked questions ({{ faqs }})</a></h5>
        <p>We have prepared a set of most frequently asked questions with as qualified and unbiased as possible answers.</p>
    </div>
    <div class="large-4 columns">
        <h5><a href="/php-best-practices"><i class="fa fa-circle-thin"></i> PHP Best Practices</a></h5>
        <p>Some of the PHP best practices that can simplify and improve your coding at the same time. Here is a list of PHP best practices.</p>
    </div>
</div>

<div class="row">
    <div class="large-12 columns" style="text-align:center;">

    </div>
</div>

<div class="row">
    <div class="large-12 columns" style="margin-top:16px; margin-bottom:16px; text-align:center;">
        have a good time at our group and don't be shy to ask your question.
    </div>
</div>
<div class="row">
    <div class="large-12 columns" style="margin-top:16px; margin-bottom:20px; text-align:center;">
        &laquo;Stay hungry, stay foolish.&raquo; <small><cite><a href="http://news.stanford.edu/news/2005/june15/jobs-061505.html">2005 - Steve Jobs &dagger;</a></cite></small>
    </div>
</div>

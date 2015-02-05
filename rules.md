---
layout: default
title: "Do's and don'ts of the PHP Facebook Group"
origin: "rules"
og_image: "assets/img/rules-large.png"
---

<div style="text-align:center;">
    <img src="/assets/img/rules.png" alt="PHP Facebook Group Rules">
</div>

<h1 style="font-family:Audiowide;text-align:center">Group rules</h1>

<h2 style="text-align: center">Do's and don'ts of the PHP Facebook group</h2>

<ul class="rules">
{% assign counter = 0 %}
{% for rule in site.data.rules.rules %}
    {% assign counter=counter | plus:1 %}
    <li id="rule-{{ counter }}">
        <h5 style="color:red"><i class="fa fa-circle-thin"></i> {{ rule.title }}</h5>
        <p>{{ rule.description }}</p>
    </li>
{% endfor %}
</ul>

<h2>Rules FAQ</h2>

Here we will try to explain in more details some of the most frequently asked questions and issues about these rules.

<h3 id="faq-1">My first language is not English. Why do I have to speak English language in your group? Isn't that discrimination towards other languages and cultures?</h3>

In this large [Facebook group](https://facebook.com/groups/2204685680) main speaking language and also language of the shared content
should be English. Many users have asked before why other languages or localizations are not allowed here?

Facebook groups currently do not have categories or so called sub-forums. That is why everything shared in this group is visible on
one timeline and topics cannot be moved to sub-categories of your prefered language.

Users of this group come from all over the world and English is the most spoken international language everywhere nowadays. English is also
the top language of the internet (800 million users). Try to picture conversation in the group as you would do in an international meeting
with people from all over the world. Yes, we would most likely talk in English.

But do **not** get the administrators wrong. We support and understand localization and internationalization issues, local cultures and people
whose first language is not English. Thanks to the awesome PHP community you can find your local PHP user group on **[php.net/ug](http://php.net/ug.php)**
which is based on the **[PHP.ug](http://php.ug)** where you can and should speak also in your local prefered language of the group.

We're sure you will figure this out sooner or later that computer science and tech industry in general has set English as its main language
of communication.

And besides all speaking English is also fun and you can improve your English skills.

<h3 id="faq-2">Why isn't each post approved by administrators? Facebook groups have that functionality.</h3>

Sometimes communication in the group goes in the wrong way, low quality is present,
posts that does not relate to the context of the group are shared or some other
reason occurs that would seem to be a good choice to administrators approve
every post that is shared or topic started. Facebook groups have that
functionality.

Administrators of this group have used the approving posts functionality in the
past before but as it turned out this added a lot of extra work to the
group administration process and even more communication loss occured. That
is why we try to solve issues on their regular basis on time and have
group opened for all discussions that follow the group rules.

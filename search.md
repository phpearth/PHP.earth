---
layout: default
title: "Search wwphp-fb"
origin: "getting-started"
og_image: "assets/img/fb-link.png"
---

<h1>Search results</h1>

<section id="search-results">
    <div class="entries"></div>
</section>

{% raw %}
<script id="search-results-template" type="text/mustache">
  {{#entries}}
    <article>
      <h3>
        {{#date}}<small><time datetime="{{pubdate}}" pubdate>{{displaydate}}</time></small>{{/date}}
        <a href="{{url}}">{{title}}</a>
      </h3>
    </article>
  {{/entries}}
</script>
{% endraw %}
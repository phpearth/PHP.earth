---
layout: default
title: "Contribute to wwphp-fb.github.io and FAQ"
origin: "contribute"
og_image: "assets/img/elephpant.png"
---
<div class="row" style="padding-top:8px">
    <div class="large-12 columns">

    <div style="text-align:center;">
        <img src="/assets/img/elephpant.png" alt="elePHPant">
    </div>

    <h1 style="font-family:Audiowide;text-align:center">Contribute</h1>

    <p>Contributing to open source projects can and should be first of all fun but it requires also lots of technical skills, patience,
    ability to work with others, constant adaptations and many commitments as well.</p>

    <p>Helping others and sharing PHP content in our Facebook group is definitely respectful and awesome contribution to the PHP community and we cannot properly
    thank each and everyone that is dedicating their time and knowledge in helping in this Facebook group, so we have made this special section where
    your contribution can get noted on this page as well.</p>

    <h2>PHP FAQ</h2>

    <p>Another important section of this group is PHP-FAQ. What you can do to help out?</p>

    <p>You can go through the <a href="https://github.com/wwphp-fb/php-faq/issues">open issues</a> on GitHub directly or go through the
    <a href="/faq">list of frequently asked questions</a> and check if there are missing information, missing questions that should be pointed
    or fix typos.</p>

    <h2>Contributors</h2>

    <p>Special credits for contributions to this page goes to these awesome people:</p>

    <div id="contribute-contributors"></div>

    <h2>How to contribute?</h2>

    <ul>
    <li>Fork wanted project from <a href="https://github.com/wwphp-fb">GitHub</a></li>
    <li>Setup your local environment:
    {% highlight bash %}$ git clone git@github.com:your_username/php-faq.git{% endhighlight %}
    </li>
    <li>Set up your repository and set a remote branch for future updates:

{% highlight bash %}
$ git add remote upstream git://github.com/wwphp-fb/php-faq.git
$ git config branch.master.remote upstream
{% endhighlight %}

    That way you can update your repository (when the upstream gets updated) and automatically pull upstream commits:

    {% highlight bash %}$ git pull{% endhighlight %}
    </li>

    <li>Create a new Git branch for instance patch-1:
    {% highlight bash %}$ git checkout -b patch-1{% endhighlight %}

    This ensures that your repository will not need rebasing when the upstream gets updated.
    </li>
    <li>Commit and push to your GitHub repository
{% highlight bash %}$ git add .
$ git commit -m "my new changes"
$ git push origin{% endhighlight %}
    </li>
    <li>Send a pull request</li>
    </ul>
    </div>
</div>

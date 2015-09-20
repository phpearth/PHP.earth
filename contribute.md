---
layout: default
title: "Get involved and contribute to World Wide PHP Facebook Group"
origin: "contribute"
og_image: "assets/img/elephpant.png"
---
<div class="row" style="padding-top:8px">
    <div class="large-12 columns">

    <div style="text-align:center;">
        <img src="/assets/img/elephpant.png" alt="elePHPant">
    </div>

    <h1 style="font-family:Audiowide;text-align:center">Contribute</h1>

    <p>Contributing to open source projects is awesome, altruistic and is changing this world. It can and should be first of all fun but it requires
    also lots of technical skills, patience, ability to work with others, constant adaptations and many commitments as well.</p>

    <h2>Contributors</h2>

    <p>Special credits for contributions to this page:</p>

    <div id="contribute-contributors"></div>

    <h2>How you can help?</h2>

    <h3>1. Share your knowledge and PHP content in the group</h3>

    <p>Helping others and sharing PHP content in our Facebook group is definitely respectful and awesome contribution to the PHP community.
    We <strong>really</strong> appreciate your efforts and help here.</p>

    <h3>2. PHP Resources</h3>

    <p>Another important section of this group is PHP Resources. How to contribute to PHP Resources?</p>

    <p>You can go through <a href="https://github.com/wwphp-fb/php-resources/issues" rel="nofollow">open issues</a> on GitHub directly
    or go through <a href="/faq/">list of frequently asked questions</a>, <a href="/articles/">articles</a> or <a href="/php-best-practices/">
    check if there are missing information that should be pointed out or fix typos.</p>

    <div class="panel callout radius" style="margin-top: 50px"><img src="/assets/img/octocat.png" alt="Octocat" />Go to GitHub, fork
    the <a href="https://github.com/wwphp-fb" rel="nofollow">wanted project</a>, send pull request and get yourself on the list of
    contributors as well.</div>

    <strong>Contributing procedure</strong>

    <p>Before contributing to any open source project on GitHub get yourself familiar with <a href="/faq/git-introduction/">Git version
    control system usage</a> and how to use <a href="https://help.github.com/">GitHub</a>.<p>

    <p>GitHub provides also built in editor on GitHub so editing content should be quite simple. You will get used to it in no time.
    Otherwise below is also a more general forking and committing changes procedure with Git and GitHub which gives you more control
    over your changes.</p>

    <ul>

        <li>Fork wanted project from <a href="https://github.com/wwphp-fb" rel="nofollow">GitHub</a></li>

        <li>Setup your local environment:
            {% highlight bash %}$ git clone git@github.com:your_username/php-resources.git{% endhighlight %}
        </li>

        <li>Set up your repository and set a remote branch for future updates:

{% highlight bash %}
$ git remote add upstream git://github.com/wwphp-fb/php-resources.git
$ git config branch.master.remote upstream
{% endhighlight %}

        That way you can update your repository (when the upstream gets updated) and automatically pull upstream commits:

        {% highlight bash %}$ git pull{% endhighlight %}
        </li>
        
        <li>
        Verify that you have all the latest commits available
            {% highlight bash %}$ git log --oneline -3{% endhighlight %}
            
            Cross-check the topmost commit log with the one in main repository and make sure everything is in sync.
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

    <h3>3. Send suggestions for micro events</h3>

    <p>Every week or two we have special topics to gain more exposure or more thorough discussions about topics that are either important for PHP community or the group in general. Micro events are pinned on top of the group until the next micro event occurs. You are welcome to send your suggestions and open a ticket at <a href="https://github.com/wwphp-fb/wwphp-fb.github.io/issues" rel="nofollow">GitHub</a>.</p>
    </div>
</div>

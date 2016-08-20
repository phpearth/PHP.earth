---
layout: default
title: "Get Involved and Contribute"
origin: "contribute"
image: "/assets/img/elephpant.png"
---

![ElePHPant](/assets/img/elephpant.png "ElePHPant")

# Contribute

Contributing to open source projects is awesome, altruistic and is changing this
world. It can and should be first of all fun but it requires also lots of technical
skills, patience, ability to work with others, constant adaptations and many
commitments as well.

## Contributors

Special credits for contributions to this page:

<div id="contribute-contributors"></div>

## How you can help?

### 1. Share your knowledge and PHP content in the group

Helping others and sharing PHP content in our Facebook group is definitely
respectful and awesome contribution to the PHP community. We **really**
appreciate your efforts and help here.

### 2. PHP Resources

Another important section of this group is PHP Resources. How to contribute to
PHP Resources?

You can go through [open issues](https://github.com/wwphp-fb/php-resources/issues)
on GitHub directly or go through the list of [frequently asked questions](/faq/),
[articles](/articles/) or [best practices](/php-best-practices/) and check if
there are missing information that should be pointed out or fix typos.

<div class="panel callout radius" style="margin-top: 50px"><img src="/assets/img/octocat.png" alt="Octocat" />Go to GitHub, fork
the <a href="https://github.com/wwphp-fb" rel="nofollow">wanted project</a>, send pull request and get yourself on the list of
contributors as well.</div>

#### Contributing procedure

Before contributing to any open source project on GitHub get yourself familiar
with [Git version control system](/faq/git-introduction/) usage and how to use
[GitHub](https://help.github.com/).

GitHub provides also built in editor on GitHub so editing content should be quite
simple. You will get used to it in no time. Otherwise below is also a more general
forking and committing changes procedure with Git and GitHub which gives you more
control over your changes.

* Fork wanted project from [GitHub](https://github.com/wwphp-fb)

* Setup your local environment:

```bash
$ git clone git@github.com:your_username/php-resources.git
```

* Set up your repository and set a remote branch for future updates:

```bash
$ git remote add upstream git://github.com/wwphp-fb/php-resources.git
$ git config branch.master.remote upstream
```

That way you can update your repository (when the upstream gets updated) and
automatically pull upstream commits:

```bash
$ git pull
```

* Verify that you have all the latest commits available

```bash
$ git log --oneline -3
```

Cross-check the topmost commit log with the one in main repository and make sure
everything is in sync.

* Create a new Git branch for instance patch-1:

```bash
$ git checkout -b patch-1
```

This ensures that your repository will not need rebasing when the upstream gets updated.

* Commit and push to your GitHub repository

```bash
$ git add .
$ git commit -m "my new changes"
$ git push origin
```

* Send a pull request

### 3. Send suggestions for micro events

Every week or two we have special topics to gain more exposure or more thorough
discussions about topics that are either important for PHP community or the group
in general. Micro events are pinned on top of the group until the next micro
event occurs. You are welcome to send your suggestions and open a [ticket or
report an issue](https://github.com/wwphp-fb/wwphp-fb.github.io/issues).

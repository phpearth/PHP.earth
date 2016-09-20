---
layout: default
title: "Get Involved"
origin: "get-involved"
image: "/assets/img/elephpant.png"
---

![ElePHPant](/assets/img/elephpant.png "ElePHPant")

# Get Involved

Get involved and give something back to the community.

## How Can You Help?

### Share your knowledge

Helping others and sharing quality PHP content in our
[Facebook group](https://www.facebook.com/groups/2204685680/) is respectful and
awesome contribution to the PHP community.

### Contribute to open source projects

Contributing to open source projects is awesome, altruistic and is changing this
world. It can and should be first of all fun but it requires also lots of
technical skills, patience, ability to work with others, constant adaptations
and many commitments as well.

Our repositories are located on [GitHub](https://github.com/wwphp-fb) and
contributing is as simple as possible. Just fork the project and send us pull
request or open an issue.

<div class="panel callout radius" style="margin-top: 50px"><img src="/assets/img/octocat.png" alt="Octocat" />Go to GitHub, fork
the <a href="https://github.com/wwphp-fb" rel="nofollow">wanted project</a> and send us pull request.</div>

* **PHP Resources**

  The [php-resources](https://github.com/wwphp-fb/php-resources) repository
  contains all the content from the FAQ and the articles.

  You can help us improve the [frequently asked questions](/faq/),
  [articles](/articles/) and [best practices](/php-best-practices/) if there
  are missing information that should be pointed out or fix typos. The
  [opened issues](https://github.com/wwphp-fb/php-resources/issues) contain
  list of things to fix and improve.

  GitHub provides also built in editor on GitHub so editing content should be
  quite simple. You will get used to it in no time. Otherwise below is also a
  more general forking and committing changes procedure with Git and GitHub
  which gives you more control over your changes.

* **Stats**

  The [stats](https://github.com/wwphp-fb/stats) application for generating weekly
  group stats report is written in PHP.

* **Facebook Bot**

  The [facebook-bot](https://github.com/wwphp-fb/facebook-bot) is an
  experimental bot written in PHP for managing Facebook groups.

#### Contributing procedure

Before contributing to any open source project on GitHub get yourself familiar
with [Git version control system](/faq/git-introduction/) usage and how to use
[GitHub](https://help.github.com/).

* Fork wanted project from [GitHub](https://github.com/wwphp-fb)

* Setup your local environment:

  ```bash
  git clone git@github.com:your_username/php-resources.git
  ```

* Set up your repository and set a remote branch for future updates:

  ```bash
  git remote add upstream git://github.com/wwphp-fb/php-resources.git
  git config branch.master.remote upstream
  ```

  That way you can update your repository (when the upstream gets updated) and
  automatically pull upstream commits:

  ```bash
  git pull
  ```

* Verify that you have all the latest commits available

  ```bash
  git log --oneline -3
  ```

  Cross-check the topmost commit log with the one in main repository and make sure
  everything is in sync.

* Create a new Git branch for instance patch-1:

  This ensures that your repository will not need rebasing when the upstream gets
  updated.

  ```bash
  git checkout -b patch-1
  ```

* Commit and push to your GitHub repository

  ```bash
  git add .
  git commit -m "my new changes"
  git push origin
  ```

* Send a pull request

### Pinned topics

Every week or two we have special topics to gain more exposure or more thorough
discussions about topics that are either important for the PHP community or the
group in general. These topics are pinned on top of the group for few days. You
can send your suggestions by opening a ticket at
[GitHub](https://github.com/wwphp-fb/wwphp-fb.github.io/issues) or getting in
touch with the us.

### Join the core team

Team members are carefully selected by the current administration staff. Get in
touch with us for further discussion. If we decide to recruit more team members
we will talk to our nominees, maybe one day to you.

#### Administrators

Administrators and moderators moderate the Facebook group.

#### Committer

Committers position is given as a recognition for dedicated contributions to
open source repositories. Committers have push access to open source repositories
on GitHub.

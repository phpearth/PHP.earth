---
description: "Get involved and give something back to the community."
image: "https://raw.githubusercontent.com/phpearth/PHP.earth/master/assets/meta/elephpant.png"
---

![ElePHPant](https://raw.githubusercontent.com/phpearth/PHP.earth/master/assets/meta/elephpant.png "ElePHPant")

# Get involved

Get involved in PHP community and give something back to the community.

## How can you help?

### Share your knowledge

Helping others and sharing quality PHP content in our
[Facebook group](https://www.facebook.com/groups/2204685680/) is respectful and
awesome contribution to the PHP community.

### Contribute to open source projects

Contributing to open source projects is awesome, altruistic and is changing this
world. It can and should be first of all fun but it requires also lots of
technical skills, patience, ability to work with others, constant adaptations
and many commitments as well.

PHP.earth open source projects are available on [GitHub](https://github.com/phpearth)
and contributing to them is as simple as possible. Just fork the project and send
us pull request or open an issue.

![Octocat](https://raw.githubusercontent.com/phpearth/PHP.earth/master/assets/meta/octocat.png "Octocat")

Go to GitHub, fork <a href="https://github.com/phpearth">wanted project</a> and
send a pull request.

* **PHP knowledge**

  The [PHP.earth docs](https://github.com/phpearth/docs) repository contains all
  the content from the FAQ and the articles.

  You can help us improve the frequently asked questions, articles and
  best practices if there are missing information that should be pointed out or
  fix typos. The [opened issues](https://github.com/phpearth/docs/issues)
  contain list of things to fix and improve.

  GitHub provides also built in editor on GitHub so editing content should be
  quite simple. You will get used to it in no time. Otherwise below is also a
  more general forking and committing changes procedure with Git and GitHub
  which gives you more control over your changes.

* **Stats**

  The [stats](https://github.com/phpearth/stats) application for generating weekly
  group stats report is written in PHP.

#### Contributing procedure

Before contributing to any open source project on GitHub get yourself familiar
with [Git version control system](/doc/interop/git) usage and how to use
[GitHub](https://help.github.com/).

* Fork wanted project from [GitHub](https://github.com/phpearth)

* Setup your local environment:

  ```bash
  git clone git@github.com:your_username/docs
  ```

* Set up your repository and set a remote branch for future updates:

  ```bash
  git remote add upstream git://github.com/phpearth/docs
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

Every week or two we have special topics in the
[Facebook group](https://facebook.com/groups/2204685680) to help people gaining
more exposure or more thorough discussions about topics that are either important
for the PHP community or the group in general. These topics are pinned on top of
the group for few days. You can send your suggestions by getting in touch with
us.

### Join the core team

Team members are carefully selected by the current staff. Get in touch with us
for further discussion. If we decide to recruit more team members we will talk to
our nominees, maybe one day to you.

#### Administrators

Administrators and moderators moderate the Facebook group.

#### Core contributors

Core contributor position is given as a recognition for someone's contributions
to open source repositories. Core contributors have push access to predefined
GitHub open source repositories and partial access to internal information about
the PHP.earth based on the work needed for these repositories.

Responsibilities:

* Merging pull requests
* Contributing patches to open source repositories

# World Wide PHP Facebook Group GitHub Page

[![Build Status](https://travis-ci.org/wwphp-fb/wwphp-fb.github.io.png?branch=master)](https://travis-ci.org/wwphp-fb/wwphp-fb.github.io)

This is the GitHub-Pages repository of the international PHP Facebook Group. Site is built with GitHub Pages which use
Jekyll.

## Installation

Local installation of the wwphp-fb.github.io requires Ruby and [Jekyll][jekyll] to preview the main site on your localhost.
Install Jekyll according to the [offical documentation](http://jekyllrb.com/docs/installation/) and run the following command to build site:

```bash
$ git clone git://github.com/wwphp-fb/wwphp-fb.github.io --recursive
$ bundle install
$ bundle exec jekyll serve --force_pooling
```

Preview of generated static files can than be viewed at http://localhost:4000

## Contributing:

Changes on submodules must be updated at this repository.

You have to checkout and push all submodules and commit the commit level changes to this repository

`git submodule foreach "(git checkout master; git pull)"`

Contributions are welcome, but please open a feature request issue at this repository to grant as a discussion time before.

[jekyll]: http://jekyllrb.com/

# World Wide Facebook Group GitHub Page

This is the GitHub-Pages Repository of the international PHP Facebook Group. Site is built with GitHub Pages which use
Jekyll.

## Installation

Local installation of the wwphp-fb.github.io requires Ruby and [Jekyll][jekyll] to preview the main site on your localhost.
Install Jekyll according to the [offical documentation](http://jekyllrb.com/docs/installation/) and run the following command to build site:

```bash
$ jekyll server --watch
```

## Jekyll inside Vagrant box
- Forward port 4000 (default port) to 4000
- Use below provided command to run jekyll

```bash
$ jekyll server --watch --host 0.0.0.0
```

Preview of generated static files can than be viewed at http://localhost:4000

## For Contributors:

Changes on submodules must be updated at this repository.

You have to checkout and push all submodules and commit the commit level changes to this repository

`git submodule foreach "(git checkout master; git pull)"`

Contributions are welcome, but please open a feature request issue at this repository to grant as a discussion time before.

[jekyll]: http://jekyllrb.com/

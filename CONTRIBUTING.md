# Contributing Guide

We love contributors and people willing to help. Open an
[issue](https://github.com/wwphp-fb/wwphp-fb.github.io/issues) or send us pull
request:

* Fork this repository over GitHub
* Create a new branch for instance `patch-1` so you will not need to rebase your
  fork when the master branch changes.
  ```bash
  git clone git@github.com:your_username/wwphp-fb.github.io --recursive
  cd wwphp-fb.github.io
  git checkout -b patch-1
  ```
* Edit the content of the repository, commit changes and push to your fork
  ```bash
  git add .
  git commit -m "Fix typo"
  git push origin patch-1
  ```
* Send us pull request

## Installation

Ruby and [Jekyll](http://jekyllrb.com/) are required to view the `wwphp-fb.github.io`
GitHub site locally. Install Jekyll according to the
[documentation](http://jekyllrb.com/docs/installation/) and inside the repository
directory use Bundler to install the needed gems and build the site:

```bash
bundle install
bundle exec jekyll serve --force_polling
```

## Jekyll inside a Vagrant box

If you use [Vagrant](https://www.vagrantup.com/) forward port 4000 (default port)
to 4000 and run Jekyll:

```bash
jekyll serve --host 0.0.0.0
```

## Docker

If you use [Docker](https://www.docker.com/) a convenient way to run Jekyll and
GitHub pages is [Jekyll image](https://hub.docker.com/r/jekyll/jekyll/). Command
for running a Docker container:

```bash
docker run --rm --label=jekyll --volume=/path/to/wwphp-fb.github.io:/srv/jekyll -it -p 127.0.0.1:4000:4000 jekyll/jekyll:pages bash
bundle exec jekyll serve
```

Preview of generated static files can than be viewed at `http://localhost:4000`.

## Build

PHP related contents (FAQs, articles and best practices) are located in a separate
[php-resources](https://github.com/wwphp-fb/php-resources) repository. When these
contents changes, [build.php](https://github.com/wwphp-fb/wwphp-fb.github.io/blob/master/build.php)
script can be used to generate search index:

```bash
sudo sh -c "curl http://get.sensiolabs.org/melody.phar -o /usr/local/bin/melody && chmod a+x /usr/local/bin/melody"
melody run build.php -vvv
```

Build script uses [melody](http://melody.sensiolabs.org/) - one file Composer scripts.

## License

By contributing to this repository you agree to share your knowledge under the
[Creative Commons Attribution 4.0 International License][license] and your code
under the [MIT license][license].

[license]: https://github.com/wwphp-fb/php-resources/blob/master/LICENSE

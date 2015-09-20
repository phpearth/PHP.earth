# Contributing guide to GitHub pages repository

We love contributors and people willing to help. Below is described procedure for contributing to this repository in particular and some extra information about it.

* Fork this repository over GitHub
* Create a separate branch for instance `patch-1` so you will not need to rebase your fork if your master branch is merged
```bash
$ git clone git@github.com:your_username/wwphp-fb.github.io
$ cd wwphp-fb.github.io
$ git checkout -b patch-1
```
* Edit the content of the repository, commit changes and push to your fork
```bash
$ git add .
$ git commit -m "Fix typo"
$ git push origin patch-1
```
* Open pull request

## Other notes

## License

By contributing to this repository you agree to share your knowledge under the [Creative Commons Attribution 4.0 International License][license] and your code under the [MIT license][license].

[php-group]: https://www.facebook.com/groups/2204685680/
[license]: https://github.com/wwphp-fb/php-resources/blob/master/LICENSE
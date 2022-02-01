[![License](https://img.shields.io/badge/license-%20MPL--v2.0-blue.svg)](../master/LICENSE)


# Sources behind [https://neic.no](https://neic.no)

Text is licensed under [CC BY-SA 4.0](https://creativecommons.org/licenses/by-sa/4.0/).
Source code is licensed under [MPL v2.0](../master/LICENSE).


## Executive summary

We use GitHub pages. Sources are at https://github.com/neicnordic/neic.no.
The web is full of [guides and tutorials](http://lmgtfy.com/?q=github+pages+howto).
GitHub pages uses [GitHub flavored markdown syntax](https://help.github.com/categories/writing-on-github/).
Go to [#web](http://neic.slack.com/messages/web) in NeIC slack if you need someone to talk to.


## Requirements to edit the website

You need a [GitHub](https://github.com/) account.

Optional: For very minor things like updating an email address it's easiest if
you are part of the [neicnordic](https://github.com/neicnordic) organization.
Ask in [#web](http://neic.slack.com/messages/web) in NeIC slack.

If you want to preview the website locally on your computer, you need to
install [Jekyll](https://jekyllrb.com).


## Why is the website on GitHub/Jekyll?

This way we do not have to worry about hosting, backup, and uptime. Also we
allow anybody to submit changes and corrections without the need of giving
these persons write or edit permissions.


## Recommendations for editing pages


### Show non-trivial changes to others before they are on the main site

For trivial changes like updating an email address: Edit in directly through
the web interface if you have write/edit permissions.

For non-trivial changes, make a fork ([guide
here](https://help.github.com/articles/fork-a-repo/)).

If you work in a fork then you can point others to
https://YOURUSER.github.io/neic.no to show them your work (but nothing is shown
until you actually commit a change).

Example: https://yohell.github.io/neic.no.


### Work locally if you can (not trivial on Windows)

1. Clone the source code to your laptop.
2. Serve it with `jekyll serve`.
3. See changes live on [http://localhost:4000/](http://localhost:4000/).
4. Edit until happy.
5. Commit.
6. Push your changes back to GitHub.

[Full guide here](https://help.github.com/articles/setting-up-your-github-pages-site-locally-with-jekyll/).


### Where to place things

- Ideally content should be in Markdown files.
- Page layout should be in html files.
- Ideally (almost) no content should be in html files.

We use Jekyll collections. Information on similar things are in the same
folder. Examples:

- People are in `_people/`.
- Activities are in `_activities/`.
- News articles are in `_posts/`.
- ... you get the idea.


### How to add/edit/modify persons

All people/staff are under `_people/`. I recommend to copy an existing person file which is either
in the same project or has a similar set of group properties, rename the file,
and adapt it.

- [Example file](https://raw.githubusercontent.com/neicnordic/neic.no/gh-pages/_people/radovan-bast.md)
- Adapt name, homepage, country, photo, email, phone.
- Under `groups:` are all the groups this person is in and in which role. Based on this information, group pages are populated with people.

For the record and for future restructuring of the website, I (RB) would like to recommend that I think now, few years
after we introduced the structure, that it is too complex. I would prefer a solution where all content are simple Markdown pages
and where content is not generated from a YAML data structure, like it is done now.


### Media

- News pictures should be ideally be 762x507 px in size.


## Troubleshooting

If you hit a problem and do not know how to get out of it, ask in
[#web](http://neic.slack.com/messages/web) in NeIC slack, but here's the basics
depending how you were working:


### If you were working directly through the web interface

Ask in [#web](http://neic.slack.com/messages/web) in the
NeIC slack for help.


### If you were working on a local clone

This is a simple, non-elegant solution:

1. Make a new clone of whatever you were working on and which worked before it broke.
2. Copy over the stuff you want and leave behind the changes you wish to discard.
3. Commit.
4. Push your changes.
5. Delete the broken clone.

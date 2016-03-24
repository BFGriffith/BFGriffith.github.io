---
layout: post
title: Week Seven &#10137; Iron Yard Tutorial Journal
---

### installing _all_ the dependencies...

As developers, we typically have to install quite a few handy dependencies and libraries when starting a new project in order to make our job much easier and more convenient, and even this relatively straightforward process can be confusing for beginning developers like me.

For better or worse, it seems there're currently no hard and fast absolute rules about how to do this or what tools to use when — but, after some socratic discussion with our instructor David Rogers and my fellow students at the Iron Yard, I've arrived at a few useful heuristics and thought I'd share some of those for this week's tutorial.

Apparently there are some who believe we may eventually use **`npm`** for everything? But, having used it quite a bit myself at this point, I don't think its functionality is quite there yet unless it adds a bunch more features... and the `init` process with `bower` seems a bit more streamlined to me with smarter defaults and predictive text. Furthermore, there're apprently many available alternatives to **`bower`** as well (none of which I've yet tried), but **`bower`** seems to be winning out in popularity compared to options like [`duo`](http://duojs.org/) or [`component`](https://github.com/componentjs/component).

Regardless, it seems most prudent and convenient so far to continue to follow the general heuristic recommended by the Iron Yard program, which is essentially to use bower for anything that's going to end up in _built_ HTML files on the front-end (that is, we ship HTML, CSS, & JavaScript)... Concurrently, another good indicator to look for is that I would prefer to use bower for anything that would require creating a link to dependency resources in `bower_components/` and require including that path script in the HTML files.
Therefore, I would generally:
`bower install --save ...`

* jquery
* modernizr
* normalize
* lodash
* bootstrap
* vue

In contrast, for dependencies only used in the development process that will not ship, as well as various tools to use on the command-line, there is reason to prefer **`npm`**...
Therefore, I would generally:
`npm install --save-dev --link ...`

* bower (might seem redundant or superflous, but this indicates to other developers what version is being used in `package.json`)
* browser-sync
* node-sass
* gulp

Then there's the question of what to `git ignore` and what to push up into one's repository... What follows below is not an exhaustive list, and particular folders or build-structures may have special requirements, but in many build processes we've used so far I've found it best to ignore the following directories/files:

* node_modules
* bower_components
* .yo-rc.json
* npm-debug.log
* `src/css/main.css`
* `src/css/*.css`
* `.DS_Store` (super annoying on Mac if not ignored)
* `dist/*`

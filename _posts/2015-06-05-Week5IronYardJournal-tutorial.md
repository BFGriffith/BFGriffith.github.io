# How to create simple scripts & use browser-sync efficiently...

Because who likes constantly hitting refresh?

1. Install [browser-sync](http://www.browsersync.io/) (most conveniently with the Node.js package manager NPM)
  * `npm install -g browser-sync`
2. to watch files, the longhand CLI-command is `browser-sync start --server --files` `FILES/RELATIVE/PATHS` (it is possible to do proxy or complex paths as well, only be mindful that you are in the root directory of the project you want to watch/run files in with browser-sync to avoid problems as it cannot watch below the "root" from which it is being run as far as I know)
3. for convenience, after you `npm init`, edit your `package.json` file with some custom scripts to run browser-sync more easily and watch or open more files automatically; these paths and scripts will naturally vary depending on the particular file structure of the project, but the following example is illustrative (use `*` for all files in a directory or of a certain extension type):
```
"scripts": {
    "test": "browser-sync start --server --files='js/*.js,test/index.html,test/spec/**/*.js' --startPath test/index.html",
    "start": "browser-sync start --server --files='index.html,css/*.css,js/*.js'"
  },
```

* Something else to keep in mind while running browser-sync are some helpful keyboard-shortcuts in the shell:
  * `^CTRL-c` (quit)
  * `bg` (suspend process in background)
    * `bg %``JOB-NUMBER` (or `+` or `-` to go to that job)
  * `fg` (foreground process)
    * `fg %``JOB-NUMBER` (or `+` or `-` to go to that job)
  * `jobs` (to get a numbered list of jobs)
  * `--` (pass commands)

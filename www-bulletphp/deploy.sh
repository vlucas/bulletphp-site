#!/bin/bash

rm -rf _deploy
mkdir _deploy
cp -R _counter/* _deploy
cd _deploy
git init .
git remote add github git@github.com:vlucas/bulletphp-site.git
git checkout -b gh-pages
git add .
git commit -am "Static site deploy"
git push github gh-pages --force

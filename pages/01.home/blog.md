---
title: Home
body_classes: 'header-image fullwidth'
content:
    items: '@self.children'
    limit: 20
    order:
        by: date
        dir: desc
    pagination: true
hide_git_sync_repo_link: false
gitrepoeditlinkurl: 'https://csil-git1.cs.surrey.sfu.ca/paulh/cmpt-363-173/tree/master/pages/01.home'
fontawesome: use_global
animate_css: use_global
wow_js: use_global
google_prettify: use_global
blog_url: blog
sitemap:
    changefreq: monthly
    priority: 1.03
modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: dsc
feed:
    description: 'Course Hub Description'
    limit: 10
metadata:
    'twitter:card' : summary
    'twitter:site' : @hibbittsdesign
    'twitter:title' : CMPT-363 User Interface Design
    'twitter:description' : Course Hub for CMPT 363 User Interface Design at Simon Fraser University
    'twitter:image': http://paulhibbitts.net/cmpt-363-173/user/pages/headerimage/4325067780_450ce6b347_o.jpg
---

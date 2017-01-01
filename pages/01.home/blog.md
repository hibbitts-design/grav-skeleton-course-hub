---
title: Home
blog_url: home
body_classes: header-image fullwidth
gitrepoeditlinkurl: https://github.com/hibbitts-design/grav-skeleton-course-hub-site/tree/master/user/pages/01.home

sitemap:
    changefreq: monthly
    priority: 1.03

modular_content:
    items: '@self.modular'
    order:
        dir: desc

content:
    items: '@self.children'
    order:
        by: date
        dir: desc
    limit: 0
    pagination: false

feed:
    description: Course Hub Description
    limit: 10

pagination: true
---

---
title: Home
blog_url: blog
body_classes: header-image fullwidth

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
    limit: 14
    pagination: true

feed:
    description: Course Hub Description
    limit: 10

pagination: true
---

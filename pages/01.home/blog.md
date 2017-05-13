---
title: Home
blog_url: home
body_classes: header-image fullwidth
child_type: item

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

feed:
    description: Course Hub Description
    limit: 10

pagination: false
---

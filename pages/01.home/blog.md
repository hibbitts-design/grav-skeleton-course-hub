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
    'twitter:title' : Course Hub Title
    'twitter:description' : Course Hub Description
    'twitter:image':
---

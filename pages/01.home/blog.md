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
        by: folder
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

metadata:
    'twitter:card' : summary
    'twitter:site' : @yourtwitteraccount
    'twitter:title' : Course Hub Title
    'twitter:description' : Course Hub Description
    'twitter:image': full_URL_to_headerimage_file
---

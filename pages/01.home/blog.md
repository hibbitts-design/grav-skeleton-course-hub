---
title: Home
published: true
visible: false
hide_page_title: true
modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: dsc
content:
    items: '@self.children'
    limit: 7
    order:
        by: date
        dir: desc
    pagination: '1'
hide_post_summary: true
post_icon: calendar-o
hide_post_date: true
hide_post_taxonomy: true
feed:
    description: 'Grav CMS Open Matter Course Hub Description'
    limit: 10
child_type: item
---

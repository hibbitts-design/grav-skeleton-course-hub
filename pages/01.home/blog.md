---
title: Home
body_classes: 'header-image fullwidth'
child_type: item
visible: true
content:
    items: '@self.children'
    limit: 7
    order:
        by: date
        dir: desc
    pagination: '1'
hero_scroll: false
show_sidebar: true
hide_post_summary: true
post_icon: calendar-o
hide_post_date: true
hide_post_taxonomy: true
continue_link_as_button: false
hide_git_sync_repo_link: false
modular_content:
    items: '@self.modular'
    order:
        by: folder
        dir: dsc
feed:
    description: 'Grav CMS Open Matter Course Hub Description'
    limit: 10
protectEdit: true
---


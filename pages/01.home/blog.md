---
title: Home
body_classes: 'header-image fullwidth'
child_type: item
post_icon: calendar-o
content:
    items: '@self.children'
    limit: 10
    order:
        by: date
        dir: desc
    pagination: true
modular_content:
    items: '@self.modular'
    order:
        by: default
        custom:
            - _important-reminders
            - _unit-preparations
feed:
    description: 'Grav CMS Open Course Hub Description'
    limit: 10
---

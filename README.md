# Grav Course Hub Skeleton

[![Demo](https://img.shields.io/badge/Demo-CourseHub-blue.svg?style=flat-square)](http://demo.hibbittsdesign.org/grav-course-hub-bones/)
[![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-skeleton-course-hub/blob/master/LICENSE)

[![Slack](https://grav-chat.now.sh/badge.svg)](https://chat.getgrav.org)

> Detailed documentation for this project is now available at http://learn.hibbittsdesign.org/coursehub

The **Course Hub** skeleton is intended to accompany a face-to-face, blended or fully online university course. It can be used to [flip](http://hibbittsdesign.org/blog/posts/flipped-lms-using-an-open-and-collaborative-platform) your LMS to the background, or seamlessly include materials within your LMS, using the modern flat-file (no database) Grav CMS as an open and collaborative Web platform.

**Table of Contents**  
[Why Grav?](#why-grav)  
[Why Use a Modern flat-file CMS?](#why-use-a-modern-flat-file-cms)  
[Course Hub Screenshot](#course-hub-screenshot)  
[Course Hub Highlights](#course-hub-highlights)  
[Quick Install (Web server only)](#quick-install-web-server-only)  
[Page Templates](#page-templates)  
[Site Structure](#site-structure)  
[Site Configuration](#site-configuration)  
[Page Header Options](#page-header-options)

## Partnering your LMS with the Grav Course Hub

### Why Grav?
* To support pedagogical goals unmet by current LMS/platform
* To deliver a better student (and facilitator) experience
* To increase capability of access, sharing and collaboration

### Why Use a Modern flat-file CMS?
As an open source modern flat-file CMS, Grav offers a distinct set of advantages to Web-savvy educators looking to move beyond their institutional LMS:
* Modern means...
  * Modern PHP code (i.e. reliability, speed, extensibility, etc.)
  * Use of current standards (i.e. Markdown, Twig, YAML, etc.)
  * Modular/customizable content chunks (i.e. reuse of content)
  * Further separation of content (i.e. files) from presentation
* Flat-file means...
  * No database means less (or no) IT involvement needed
  * Content stored in text files rather than in a database
  * Takes full advantage of the collaborative ecosystem now available (i.e. GitHub)
  * Increased portability, as moving a site now only requires simply copying files to another location
  * All template and content files are 100% version controllable

### Course Hub Screenshot
![Course Hub Screenshot](/assets/screenshot.jpg)  
_Figure 1. Example Grav Course Hub website, with GitHub collaborative page editing enabled.  Explore an example **single** course site at [demo.hibbittsdesign.org/grav-course-hub/](http://demo.hibbittsdesign.org/grav-course-hub/) and a **multiple** course site at [demo.hibbittsdesign.org/grav-multi-course-hub/](http://demo.hibbittsdesign.org/grav-multi-course-hub/)._

### Course Hub Highlights
* A complete ready-to-run Grav package (open source)
* Blog-format, with 'featured' (sticky) posts
* [Single course](http://hibbittsdesign.org/demo/grav-course-hub-bootstrap/) per Hub, [multiple courses](http://hibbittsdesign.org/demo/grav-multi-course-blog-hub/) per Hub or even [multiple course sub-sites](http://hibbittsdesign.org/demo/grav-multi-course-pages-hub/) (blog + multiple pages per course) per Hub
* Optional important reminders & class preparations areas
* Hub pages can be easily added/removed/changed
* Uses [Markdown](https://daringfireball.net/projects/markdown/) for streamlined cross-platform content
* Image header area above Hub navigation bar
* Sidebar is a simple markdown file, which can also contain HTML
* 'Chromeless Pages' option to hide global navigation elements for all pages (to support embedding multiple pages within LMS)
* URL flag to only display page content (for display within LMS). For example, [http://demo.hibbittsdesign.org/grav-course-hub-bootstrap/home/week-03/chromeless:true](http://demo.hibbittsdesign.org/grav-course-hub-bootstrap/home/week-03/chromeless:true)
* External links are automatically opened in a new Tab/Window
* Built-in support for entire Hub to be collaboratively maintained on GitHub or GitLab (for local hosting)
* Since everything is built with Grav it can be _entirely_ customized

To learn more about how to most effectively use the Grav Course Hub, visit [hibbittdesign.org](http://hibbittsdesign.org/blog/)

## Grav Course Hub Installation  

### Quick Install (Web server only)
**Pre-flight Checklist**  

1. Confirm Web server PHP version (PHP 5.5.9 or higher)
2. Web server login credentials (username and password)

**Installation Steps**  

1. Download the ready-to-run [Course Hub Skeleton Package](http://hibbittsdesign.org/blog/downloads/grav-skeleton-course-hub-site.zip)
2. Unzip the package onto your desktop  
3. Copy the entire Grav Course Hub folder to your Web server  
4. Point your browser to the Web server folder  
5. Create your site administrator account when prompted  
6. And you're done! (press the ![Right Arrow Circle Icon](/assets/fa-arrow-circle-right.png) icon in the Admin Panel to preview site)

## Grav Course Hub Details  

### Page Templates
* Blog template (blog.html.twig)
* Important reminders template (important_reminders.html.twig)
* Weekly preparations template (preparations.html.twig)
* Blog item template (blog_item.html.twig)
* Item template (item.html.twig)
* Page with Sidebar template (sidebarpage.html.twig)
* Full width Page template (fullwidthpage.html.twig)
* Sidebar template (sidebar.html.twig)

### Site Structure

```
/user
  - /pages
    - /01.blog | blog.html.twig and blog_item.html.twig
      -/_important-reminders | important-reminders.html.twig
      -/_class-preparations | class-preparations.html.twig
      -/week-01 | item.html.twig
      -/week-02 | item.html.twig
      - etc..
    - /02.resources | sidebarpage.html.twig
      -/sidebarpage.md
    - /03.syllabus | fullwidthpage.html.twig
      -/fullwidthpage.md
    - /sidebar | sidebar.html.twig
        -/sidebar.md
    - /headerimage | default.html.twig
        -/default.md
    - /footer | default.html.twig (Course Hub Bones theme element)
        -/default.md
    - /logo | default.html.twig (Course Hub Bones theme element)
        -/default.md
    - /mobilemenu | default.html.twig (Course Hub Bones theme element)
        -/default.md
```

### Site Configuration
The 'site.yaml' file located in the '/user/config/' folder contains the following default values:
```
title: CPT-363
metadata:
    description: 'A short description of your course would go here'
displaymenuentries:
    enabled: true         # display of additional menu entries
menu:                     # menu entry for adding external sites/tools
    - text: Grav
      icon: arrow-circle-right
      url: http://getgrav.org/
icon:                     # default Font Awesome icons for preparation and post entries
    post: calendar-o
github:
    location: none        # menu | page | none
    icon: github
    tree: https://github.com/hibbitts-design/grav-skeleton-course-hub-site/edit/master/user/pages/
hidehomemenulink: false   # suppress Home menu link
```

| Setting | Child Setting | Description                                                                                                            |
|---------|---------------|------------------------------------------------------------------------------------------------------------------------|
| title   |               | The course number/id, to be displayed at the top of every page.                                                      |
| metadata  |  description | The short description of the course hub site.                                       |
| displaymenuentries  |  enabled | Can be set to `true` or `false`. When set to `true`, all defined menu items are added to the navbar.                                       |
| menu  |  text | Text label for an external link to be included on navbar.                                       |
| menu  |  icon | Font Awesome icon code for an external link (optional).                                        |
| menu  |  url | URL for an external link. |                                    
| icon  | post          | Change the default Font Awesome icon for the weekly blog posts (i.e. weekly summaries).           |
| github  | location       | Can be set to `page`, `menu`, or `footer` or `none`. When set to `page`, `menu` or `footer`, it will display the **Edit this page** link to your GitHub repo in the indicated location. |
| github  | icon       | Set the Font Awesome icon for the **Edit this page** menu or page link. |
| github  | tree          | Sets the tree by which your site's content is based. Generally the repo your site's content is pulled from.            |
| hidehomemenulink  |       | Can be set to `true` or `false`. When set to `true`, the Home menu link in the navbar is not displayed.|

## Page Header Options

### Page Options for Blog Items
Blog item pages support the following additional options:
```
icon: users             # optional Font Awesome icon for page title
taxonomy:
  tag: Featured         # setting to make post 'sticky' (i.e. remain at top)
hide_from_post_list: true  # hide this blog post from blog index
```

### Page Options for RSS Feed Items
RSS Feed pages support the following additional options:
```
rss_feed_display_order: date  # sort order for items (can also be `source`)
rss_feed_header_images: true  # display of RSS Feed item header images
rss_feed_preview_paragraphs: two  # number of preview paragraphs displayed (can also be `one` or `all`)
```

### Page Options for All Pages
All pages support the following additional options:
```
hide_git_sync_repo_link: true    # hide GitHub edit link for this page
git_sync_repo_link: https://github.com/hibbitts-design/grav-skeleton-course-hub/tree/master/pages/01.home     # to override the automatically calculated GitHub URL
hide_page_title: true   # hide the display of the title of this page
```
---

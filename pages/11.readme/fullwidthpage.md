---
title: Read Me
published: true
hide_page_title: true
hide_git_sync_repo_link: false
---

**It's as easy as 1-2-3 to publish, share and collaboratively edit your Grav Open Course Hub!**

1. Create a new [Git](https://git-scm.com/) repository (hosted on [GitHub](https://github.com/), [GitLab](https://about.gitlab.com/), [Bitbucket](https://bitbucket.org/) or your own server) with at least one commit.
2. Tap the 'SETUP GIT SYNC' link on the far-right of the site navigation bar on this page.
3. Go to the Git Sync Link Setup options on the [Admin Site Configuration panel](../../admin/config/site) to change the display and functionality of the automatically displayed Git Sync Link (including not displaying it).

**How about embedding any page from this site into your LMS or another platform?**  

By adding the URL parameter `chromeless:true` to any Open Course Hub page you can display that page's content without the global header image, site navigation bar, sidebar and footer.  

For example, the URL [http://demo.hibbittsdesign.org/grav-course-hub/schedule](http://demo.hibbittsdesign.org/grav-course-hub/schedule) displays the standard Open Course Hub page but the URL [http://demo.hibbittsdesign.org/grav-course-hub/schedule/chromeless:true](http://demo.hibbittsdesign.org/grav-course-hub/schedule/chromeless:true) will only display that page's content. Any links between Open Course Hub pages will result in pages being displayed in the same manner.

**Looking for more examples of what the Open Course Hub can do?**  
In addition to this intermediate-level demo course, there are additional demos available in the folder `/user/themes/course-hub-bootstrap/_demo/`. Simply copy all the page folders within one demo folder (e.g. `/user/themes/course-hub-bootstrap/_demo/advanced/`) into your `/user/pages/` folder.

<hr>

Want to no longer display this page on your site?  
Delete the page 'Read Me' in your [Admin Pages panel](../../admin/pages) or set the page's 'Published' option under the 'Options' Tab to 'No'.

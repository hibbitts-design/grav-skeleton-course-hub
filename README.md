<div align="center">

# 🏫 Grav Open Course Hub 2

### Ready-to-Run Skeleton Package

<p><em>An open, collaborative home for your course – inside or outside your LMS, with content in portable Markdown files you control.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-skeleton-course-hub?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-skeleton-course-hub/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-skeleton-course-hub/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.3-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-open-course-hub/">demo</a></p>

<p>A free, open-source alternative to <a href="https://github.com/hibbitts-design/grav-skeleton-helios-course-hub">Grav Helios Course Hub</a>, built on <a href="https://getgrav.org">Grav CMS</a> and the <a href="https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter">Bootstrap4 Open Matter</a> theme, with Markdown file-based content, a built-in Admin panel, and no database required. Helios Course Hub, built on the premium Helios theme, adds a more refined design, a table of contents on every page, and automatic single or multi-course setup.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-dark.webp"><img alt="Course homepage with this week's module, reminders and required reading, and a course sidebar with LMS links" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2-dark.webp"><img alt="Course blog with a featured welcome post and other posts, and a sidebar with course links, Popular Tags, Archives and RSS" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2.webp" width="49%"></picture></a>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-3.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-3-dark.webp"><img alt="Modules page with a card for each module, and the course sidebar on the right" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-3.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-4.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-4-dark.webp"><img alt="Module 4 page with its slides, and a list of all modules on the right with Module 4 highlighted and its sections listed below it" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-4.webp" width="49%"></picture></a>

<p>Open Course Hub – Course homepage and the course blog (top), and the Modules page and a module page (bottom)</p>

</div>

A complete, pre-configured package that gives a course an open and collaborative home on the web, inside or outside your LMS. Content is stored as simple Markdown files you can keep locally, with a built-in Admin panel for browser-based editing and no database required. Runs on nearly any web hosting service.

## What Sets It Apart

- **LMS embedding without LTI** – add `/chromeless:true` or `?embedded=true` to any page URL to show only its content, or display the whole site without its menu, sidebar, and footer
- **Course modules and a course blog** – a Modules page with a card for each module, a list of modules (with the current page's sections) beside every module page, and Previous and Next buttons, as in Grav Helios Course Hub, plus a course blog for news, tips and reflections, with Popular Tags, Archives and RSS in its sidebar
- **Bring a course over from your LMS** – import a Canvas, Moodle, Brightspace, or Blackboard course (a Common Cartridge export) as modules with the free [Common Cartridge Converter](https://common-cartridge-converter.hibbittsdesign.org/) (beta) – see [an example conversion](https://demo.hibbittsdesign.org/grav-open-course-hub-common-cartridge-it2dda/)
- **Open authoring built in** – Git Sync keeps the site in step with GitHub or a similar Git service, with "Edit this Page" links to each page's Markdown source
- **A course-ready structure** – a Home page with "What's Happening This Week" reminders, modules and a course blog, plus schedule, topics, resources, and syllabus pages
- **Rich embeds** – Google Slides, H5P, PDF, iFrame, Embedly, and link preview cards, plus badges and buttons, all with shortcodes, and GitHub-style alerts (`> [!NOTE]`) for callouts
- **Course content shortcodes** – learning objectives, key takeaways, reflections, definitions, examples, case studies, references, and more, with the same shortcodes as Grav Helios Course Hub
- **Course search** – search the course from the sidebar (the **/** key jumps to it)
- **Visual styles** – 2026 Modern (with a tinted NavBar), 2026 Refresh or Classic, with optional Dark Mode
- **Portable by design** – your content is plain Markdown files on your server, ready to move to any tool or host if your needs change

## When is Grav Open Course Hub a Good Candidate?

Grav Open Course Hub is a good fit when you:

- Want a lightweight, open companion site for a single course alongside your LMS
- Value Git-based, open authoring of course materials
- Prefer a simple Bootstrap look you can adjust through theme options

Other options might be better when you:

- Want a structured course site with a table of contents on every page and one install that grows from one course to many – consider [Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub), built on the premium Helios theme
- Have several courses – the [Grav Open MultiCourse Hub](https://github.com/hibbitts-design/grav-skeleton-multicourse-hub) manages them in one installation, with each course's own look
- Want a guide or open textbook-style resource alongside a blog, rather than a course companion – consider [Grav Open Publishing Space](https://github.com/hibbitts-design/grav-skeleton-open-publishing-space)
- Need real LMS features such as enrollment, grading, or student progress tracking
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)

Already running Open Course Hub? See [moving to Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub#from-grav-open-course-hub-single-course) for step-by-step migration guidance. Content using the shared shortcodes (including `[topics]` and the course content shortcodes), GitHub-style alerts, and course card fields moves across unchanged. Helios Course Hub has no course blog, so blog posts move across as ordinary pages, without tags, archives or RSS.

## Quick Start

Open Course Hub is best suited for authors and educators comfortable with web hosting and folder-based content. An online Admin panel is included for browser-based editing – no code editor required.

### Pre-flight Checklist
1. Confirm your web server meets [Grav's requirements](https://learn.getgrav.org/17/basics/requirements) (PHP 8.3 or higher, or PHP 8.0.2 or higher for the Grav 1.7 version)
2. Have your web server login credentials ready (username and password)

### Installation Steps
1. **Download** the [Open Course Hub Skeleton](https://github.com/hibbitts-design/grav-skeleton-course-hub/releases/latest/download/grav-skeleton-course-hub.zip) package (a Grav 1.7 version is also available on the [release page](https://github.com/hibbitts-design/grav-skeleton-course-hub/releases/latest))
2. **Unzip** the package onto your desktop
3. **Copy** the entire Grav Open Course Hub folder to your web server
4. **Open your browser** and go to your site's URL
5. **Create your site administrator account** when prompted
6. **You're done!** – press the preview icon in the Admin Panel to view your site

> [!TIP]
> When copying the Grav Open Course Hub folder to your web server, copy the **entire folder** – it contains hidden files (such as `.htaccess`) that are not selected by default. Omitting these hidden files can cause problems when running Grav.

## Course Setup

Everything below is done in the Admin Panel, or by editing the files in `user/pages` if you prefer. Folder names such as `03.modules` start with a number that sets their order in the menu.

### Site Name and Description

1. Open **Configuration → Site**
2. Set **Site Title** (shown in the NavBar) and **Description**

### Course Home Page

The Home page (`01.home`) is built from three parts, each its own page inside it:

| Part | Page | What it shows |
|---|---|---|
| Announcement | `home/_announcement` | A notice at the top, such as a welcome or a change of room |
| Reminders | `home/_reminders` | "What's Happening This Week": the current module and important reminders |
| Preparations | `home/_preparations` | "Looking Ahead to Next Week": what to read or do next |

To update them each week, open **Pages**, expand **Home**, and edit each part.

### Modules

The Modules page (`03.modules`) shows its own text, then a card for each module. Each module (`modules/module-01`, …) can have its own pages, with a list of all modules beside them and Previous and Next buttons through every module and page in order.

To add a module:

1. In **Pages**, add a page under **Modules** with the `course-page` template (or copy a `module-XX` folder)
2. Give it a **Title**, and on its **Module** tab a **Card Description** – both show on its card
3. Add the module's content, and any pages inside it

On the **Module** tab, a module or page can also have:

- **Group** – shows it under a heading, on the cards and in the module list
- **Badge Label** and **Badge Color** – a short status, such as "Draft" or "Due Friday", on its card

Beside a module page, the module list also shows that page's sections, from its headings (with the included Page TOC plugin), and stays in view while reading.

To bring a course over from your LMS, export it as a Common Cartridge file, convert it with the [Common Cartridge Converter](https://common-cartridge-converter.hibbittsdesign.org/), and replace the `03.modules` folder with the converted one.

### Course Blog

The Blog page (`04.blog`) lists its posts newest first, with Popular Tags, Archives and RSS in its sidebar.

To add a post:

1. In **Pages**, add a page under **Blog** with the `item` template
2. Set its **Date**, and its tags under **Taxonomy**
3. Add the tag `featured` to show it first

### Weekly Units Instead of Modules

To organise a course by weeks, a blog page can list weekly units, newest first, as CPT363-3 in the [Open MultiCourse Hub](https://github.com/hibbitts-design/grav-skeleton-multicourse-hub) does. Turn on the blog's **Hide Post Date** and **Hide Post Taxonomy** options, and its sidebar leaves out Popular Tags and Archives.

### Menu and Navigation

- Top-level pages (Modules, Blog, Schedule, Topics, Resources, Syllabus, and so on) appear in the NavBar, in folder-number order
- To leave a page out of the menu, turn off its **Visible** option
- To add links to other sites, use **Custom Menu Items** under **Themes → My Theme**

### Sidebar, Footer and Header Image

These shared parts are pages too, and don't appear in the menu:

- **Sidebar** (`sidebar`) – course contacts, office hours and LMS links, shown beside most pages
- **Footer** (`footer`) – the text at the bottom of every page
- **Header image** (`headerimage`) – replace its image to change the banner

### Theme Options

Under **Themes → My Theme** (see the [Bootstrap4 Open Matter README](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter#theme-options) for every option):

- **Visual Style** – Theme Style (2026 Modern, 2026 Refresh or Classic) and Dark Mode (off, on, or following the visitor's system)
- **Header** – Header Image Height (Standard, Slim, Standard on home pages with slim or hidden elsewhere, or Hidden) and the NavBar's look, colour, position and breakpoint
- **Site options** – a chromeless site (no menu, sidebar or footer), menu dropdowns, and a Creative Commons license
- **Custom Menu Items** and **Git Sync Link** – see above and below

> [!TIP]
> The slim header shows only the middle of the image, so landscapes, textures, or photos with a centred subject work best.

### Embedding in Your LMS

Add one of these to any page's address to show only its content, without the menu, sidebar or footer, ready to embed in a Canvas, Moodle, Brightspace or Blackboard page:

| Add to the address | For example |
|---|---|
| `/chromeless:true` | `https://yoursite.com/modules/module-01/chromeless:true` |
| `?embedded=true` | `https://yoursite.com/modules/module-01?embedded=true` (carried forward as you follow links) |

The included `lms-home` page shows just this week's reminders and preparations, ready to embed as your LMS course's home page. For every option, see the theme's [Page URL Parameters](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter#page-url-parameters).

### Git Sync and "Edit this Page"

1. Set up Git Sync in the Admin Panel (its own menu item in Grav 2, or **Plugins → Git Sync** in Grav 1.7), with a repository on GitHub, GitLab, Bitbucket or your own server
2. Under **Themes → My Theme → Git Sync Link**, choose where the link appears and whether it views or edits each page's source

To hide the link on one page, add `?edit_link=false` to its address.

### Callouts and Course Content

Start a blockquote with `> [!NOTE]`, `> [!TIP]`, `> [!IMPORTANT]`, `> [!WARNING]` or `> [!CAUTION]` for a callout; the Home page's announcement shows an example.

For course content, wrap it in one of these shortcodes, such as `[objectives]...[/objectives]`. Each one except `[excerpt]` can have its own heading, such as `[objectives title="By the end of this week"]`:

| Shortcode | Default heading |
|---|---|
| `[objectives]` | Learning Objectives |
| `[key-takeaways]` | Key Takeaways |
| `[reflection]` | Reflection |
| `[definition]` | Definition |
| `[example]` | Example |
| `[case-study]` | Case Study |
| `[project-brief]` | Project Brief |
| `[process-note]` | Process Note |
| `[feedback-requested]` | Feedback Requested |
| `[exercise]` | Interactive Activity |
| `[announcement]` | Announcement (styled as Important, or set `type="note"`, `"tip"`, `"warning"` or `"caution"`) |
| `[references]` | References |
| `[excerpt]` | – (a quoted passage) |

These are the same as in Grav Helios Course Hub, so content moves across unchanged.

### Embeds and Other Shortcodes

| Shortcode | What it adds |
|---|---|
| `[googleslides url="..."]` | Google Slides, 16:9 (add `ratio="4:3"` for 4:3) |
| `[pdf url="..."]` | A PDF viewer (add `ratio="portrait"` for letter or A4 pages) |
| `[iframe url="..."]` | Any embeddable page, 16:9 |
| `[h5p url="..."]` | H5P interactive content |
| `[embedly url="..."]` | A link card from Embedly |
| `[linkpreviewcard url="..."]` | A link card made on your own site, without Embedly |
| `[topics]...[/topics]` | An A–Z topics index of the list inside it |
| `[badge label="..."]`, `[button label="..." url="..."]` | Badges and buttons |
| `[showifembedded]`, `[hideifembedded]` | Content shown only, or never, when the page is embedded |

Add `title="..."` to the Google Slides, PDF, iframe and H5P shortcodes, so screen readers can say what each embed is. For every shortcode, see the [Bootstrap4 Open Matter README](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter#what-sets-it-apart).

### Search

The SimpleSearch plugin adds a "Search course..." box to the sidebar; the **/** key jumps to it. To keep a page out of the results, add `simplesearch: process: false` to its frontmatter, as the included `lms-home` page does.

### News Feeds

The unpublished `ux-news` page lists the latest articles from the feeds set in **Plugins → Twig Feeds**. To use it, enable the plugin, set your feeds, and publish the page.

### Updating an Existing Site

For the latest My Theme options on a site created before Open Course Hub 4.5.5, replace everything from `form:` in `user/themes/mytheme/blueprints.yaml` with:

```yaml
extends@:
  type: bootstrap4-open-matter/blueprints
  context: 'themes://'
```

## Requirements

- PHP >= 8.3 (or >= 8.0.2 for the Grav 1.7 version)
- Grav CMS 2.0 (included in the package), or Grav CMS 1.7 in the Grav 1.7 version

## Support

### Contact and Support
- Share your feedback in the [Open Course Hub Survey](https://docs.google.com/forms/d/e/1FAIpQLSeI6SuJYPyKrhQmlnRVxJI9plUiemu5yTLtLLjwKc9QboR8VQ/viewform)
- Follow [@hibbittsdesign@mastodon.social](https://mastodon.social/@hibbittsdesign) on Mastodon for updates
- 👩🏻‍💻🧑🏻‍💻 Join the [Grav Discord](https://chat.getgrav.org) and often find me there
- Add a ⭐️ [star on GitHub](https://github.com/hibbitts-design/grav-skeleton-course-hub) to the Open Course Hub project repository
- For bugs or feature requests, [open an issue](https://github.com/hibbitts-design/grav-skeleton-course-hub/issues) on GitHub

### Professional Services

By leveraging his extensive UX design expertise and systems-oriented approach, Paul helps teams and individuals utilize open content in education and publication settings. Professional services include user experience and workflow consulting, premium support subscriptions, workshops, and custom development. Interested? Send a note to [paul@hibbittsdesign.org](mailto:paul@hibbittsdesign.org).

## License

MIT – Hibbitts Design

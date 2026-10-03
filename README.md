<div align="center">

# 🏫 Grav Open Course Hub

### Ready-to-Run Skeleton Package

<p><em>An open, collaborative home for your course – inside or outside your LMS, with content in portable Markdown files you control.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-skeleton-course-hub?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-skeleton-course-hub/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-skeleton-course-hub/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.3-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-open-course-hub/">demo</a></p>

<p>The predecessor to <a href="https://github.com/hibbitts-design/grav-skeleton-helios-course-hub">Grav Helios Course Hub</a> – a free, open-source package built on <a href="https://getgrav.org">Grav CMS</a> and the <a href="https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter">Bootstrap4 Open Matter</a> theme, with Markdown file-based content, a built-in Admin panel, and no database required. For new course sites, Helios Course Hub offers a more refined visual experience, automatic single or multi-course setup, and course-aware search.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-dark.webp"><img alt="Course homepage with weekly reminders, required reading, and a course sidebar with LMS links" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot.webp" width="49%"></picture></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2.webp"><picture><source media="(prefers-color-scheme: dark)" srcset="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2-dark.webp"><img alt="Week 1 page with a header photo, the week's question, class summaries, and embedded slides, with the course sidebar" src="https://raw.githubusercontent.com/hibbitts-design/grav-skeleton-course-hub/refs/heads/master/screenshots/screenshot-2.webp" width="49%"></picture></a>

<p>Open Course Hub – Course homepage (left) and a weekly module page (right)</p>

</div>

A complete, pre-configured package that gives a course an open and collaborative home on the web, inside or outside your LMS. Content is stored as simple Markdown files you can keep locally, with a built-in Admin panel for browser-based editing and no database required. Runs on nearly any web hosting service.

## What Sets It Apart

- **LMS embedding without LTI** – add `/chromeless:true` or `?embedded=true` to any page URL to show only its content, or display the whole site without its menu, sidebar, and footer
- **Open authoring built in** – Git Sync keeps the site in step with GitHub or a similar Git service, with "Edit this Page" links to each page's Markdown source
- **A course-ready structure** – weekly units listed newest first, "What's Happening This Week" reminders, plus schedule, resources, and syllabus pages
- **Rich embeds** – Google Slides, H5P, PDF, iFrame, Embedly, and link preview cards, plus badges and buttons, all with shortcodes, and GitHub-style alerts (`> [!NOTE]`) for callouts (Grav 2.0 version)
- **Course content shortcodes** – learning objectives, key takeaways, reflections, definitions, examples, case studies, references, and more, with the same shortcodes as Grav Helios Course Hub
- **Course search** – search the course from the sidebar
- **Visual styles** – 2026 Refresh or Classic, with optional Dark Mode
- **Portable by design** – your content is plain Markdown files on your server, ready to move to any tool or host if your needs change

## When is Grav Open Course Hub a Good Candidate?

Grav Open Course Hub is a good fit when you:

- Want a lightweight, open companion site for a single course alongside your LMS
- Value Git-based, open authoring of course materials
- Prefer a simple Bootstrap look you can adjust through theme options

Other options might be better when you:

- Want a more refined design, multi-course support, and course-aware search – consider [Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub)
- Need real LMS features such as enrollment, grading, or student progress tracking
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)

Already running Open Course Hub? See [moving to Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub#from-grav-open-course-hub-single-course) for step-by-step migration guidance. Content using the shared shortcodes (including `[topics]` and the course content shortcodes), GitHub-style alerts, and course card fields moves across unchanged.

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

- **Site name and description** – in the Admin Panel under **Configuration → Site**
- **Course home and weekly units** – the Home page lists each week's unit (`home/module-01`, `module-02`, …), newest first by date. Add a unit with **Pages → Add** under Home, or by copying a `module-XX` folder; unpublish a unit to hide it. Edit this week's reminders ("What's Happening This Week") in `home/_reminders` and the "Looking Ahead to Next Week" area in `home/_preparations`
- **Navigation** – top-level pages (Schedule, Resources, Syllabus, and so on) appear in the menu bar, ordered by their folder number; add extra menu links in the theme's Custom Menu Items
- **Shared parts** – edit the `sidebar` and `footer` pages, and replace the image in `headerimage` to change the banner
- **Look and options** – under **Themes → My Theme**: Theme Style, Dark Mode, NavBar, chromeless site, and Creative Commons license (see the [Bootstrap4 Open Matter README](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter#theme-options) for all options)
- **LMS embedding** – add `/chromeless:true` or `?embedded=true` to any page URL; the included `lms-home` page shows just this week's reminders and preparations, ready to embed
- **Git Sync and "Edit this Page"** – set up the Git Sync plugin in the Admin Panel, then choose where the link appears and whether it views or edits the source in the theme's Git Sync Link options; add `?edit_link=false` to a page URL to hide the link on that page
- **Callouts** – start a blockquote with `> [!NOTE]`, `> [!TIP]`, `> [!IMPORTANT]`, `> [!WARNING]`, or `> [!CAUTION]` (Grav 2.0 version); the Home page's announcement shows an example
- **Course content shortcodes** – wrap content in `[objectives]`, `[key-takeaways]`, `[reflection]`, `[definition]`, `[example]`, `[case-study]`, `[project-brief]`, `[process-note]`, `[feedback-requested]`, `[announcement]`, `[exercise]`, `[references]`, or `[excerpt]` (see the [Bootstrap4 Open Matter README](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter#what-sets-it-apart))
- **Search** – the SimpleSearch plugin is included; to keep a page out of results, add `simplesearch: process: false` to its frontmatter (the included `lms-home` page does this)

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

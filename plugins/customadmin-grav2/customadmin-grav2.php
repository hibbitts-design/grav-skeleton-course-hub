<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Uri;

class CustomadminGrav2Plugin extends Plugin
{
    public static function getSubscribedEvents() {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
        ];
    }

    public function onPluginsInitialized()
    {
        if ($this->isAdmin2Route()) {
            $this->enable([
                'onPagesInitialized' => ['onPagesInitializedAdmin2', 1001],
            ]);
        }

        /** @var Uri $uri */
        $uri = $this->grav['uri'];
        $route = $this->config->get('plugins.admin.route');

        if ($route && preg_match('#' . $route . '#', $uri->path())) {
            $this->enable([
                'onPageInitialized' => ['onPageInitialized', 0]
            ]);
        }
    }

    private function isAdmin2Route(): bool
    {
        foreach (['admin2', 'admin'] as $slug) {
            if (!$this->config->get("plugins.{$slug}.enabled", false)) {
                continue;
            }
            $route = $this->config->get("plugins.{$slug}.route", '');
            if (!$route) {
                continue;
            }
            $base = '/' . trim($route, '/');
            $current = $this->grav['uri']->route();
            if ($current === $base || str_starts_with($current, $base . '/')) {
                return true;
            }
        }
        return false;
    }

    public function onPagesInitializedAdmin2(): void
    {
        $css = file_exists(__DIR__ . '/customadmin.css') ? file_get_contents(__DIR__ . '/customadmin.css') : '';
        $js  = file_exists(__DIR__ . '/customadmin.js')  ? file_get_contents(__DIR__ . '/customadmin.js')  : '';

        if ($css === '' && $js === '') {
            return;
        }

        ob_start(function (string $html) use ($css, $js): string {
            if (strpos($html, 'data-sveltekit-preload-data') === false) {
                return $html;
            }
            if ($css !== '') {
                $html = str_replace('</head>', '<style>' . $css . '</style></head>', $html);
            }
            if ($js !== '') {
                $html = str_replace('</body>', '<script>' . $js . '</script></body>', $html);
            }
            return $html;
        });
    }

    public function onPageInitialized()
    {
        $assets = $this->grav['assets'];
        $assets->addCss('plugin://customadmin-grav2/customadmin.css', 1);
        $assets->addJs('plugin://customadmin-grav2/customadmin.js', 1);
    }
}

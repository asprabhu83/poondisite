<?php

defined('BASEPATH') or exit('No direct script access allowed');

include_once(__DIR__ . '/App_assets.php');

class App_css extends App_assets
{
    public function add($name, $data, $group = 'public', $deps = [])
    {
        if (isset($this->registered[$group][$name])) {
            return false;
        }

        $this->initializeEmptyGroup($group);

        if (is_string($data)) {
            $data = ['path' => $data];
        }

        if (!isset($data['deps'])) {
            $data['deps'] = $deps;
        }

        $this->registered[$group][$name] = $data;

        return true;
    }

    public function get($group = 'public')
    {
        return $group === null ? $this->registered[$group] : $this->registered;
    }

    public function compile($group = 'public')
    {
        $html = '';

        $defaults = [
            'rel'  => 'stylesheet',
            'type' => 'text/css',
            'defer' => 'defer',
        ];

        $items = $this->do_items(array_keys($this->registered[$group]), $group);

        foreach ($items as $id => $data) {
            $attributes = $defaults;

            /**
             * Set id key for the attributes
             */
            $attributes['id'] = $id;

            /**
             * Check if versioning is set
             * @var boolean
             */
            $version = isset($data['version']) ? $data['version'] : true;

            /**
             * Compile the URL
             */
            $attributes['href'] = $this->compileUrl($data['path'], $version);

            /**
             * Finally build the <link> for CSS file
             */
            $html .= '<link' . $this->attributesToString($id, $attributes, $data) . '>' . PHP_EOL;
        }

        return $html;
    }

    /**
     * @deprecated 1.0.0
     */
    public function coreStylesheet($path, $fileName)
    {
        if (file_exists(FCPATH . $path . '/my_' . $fileName)) {
            $fileName = 'my_' . $fileName;
        }

        $fileName = $this->getMinifiedFileName($fileName, $path);

        $ver = ENVIRONMENT == 'development' ? time() : get_assets_version();

        return '<link href="' . base_url($path . '/' . $fileName . '?v=' . $ver) . '" rel="stylesheet">' . PHP_EOL;
    }
}

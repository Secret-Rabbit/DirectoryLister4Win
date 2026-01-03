<?php

namespace App\ViewFunctions;

use App\Support\Str;

class Url extends ViewFunction
{
    protected string $name = 'url';

    /** Create a new Url object. */
    public function __construct(
        private string $directorySeparator = DIRECTORY_SEPARATOR
    ) {}

    /** Return the URL for a given path. */
    public function __invoke(string $path = '/'): string
    {
        return $this->escape($this->stripLeadingSlashes($path));
    }

    /** Strip all leading slashes (and a single dot) from a path. */
    protected function stripLeadingSlashes(string $path): string
    {
        return (string) preg_replace('/^\.?(\/|\\\)+/', '', $path);
    }

    /** Escape URL characters in path segments. */
    protected function escape(string $path): string
    {
        /** Always normalize slashes for web */
        $path = str_replace('\\', '/', $path);

        /** Splitting by web separator */
        return Str::explode($path, '/')->map(
            static function (string $segment): string {
                return rawurlencode($segment);
            }
        )->implode('/');
    }
}

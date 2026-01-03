<?php

namespace App\ViewFunctions;

use App\Config;
use App\Support\Str;
use Tightenco\Collect\Support\Collection;

class Breadcrumbs extends ViewFunction
{
    protected string $name = 'breadcrumbs';

    /** Create a new Breadcrumbs object. */
    public function __construct(
        private Config $config,
        private string $directorySeparator = DIRECTORY_SEPARATOR
    ) {}

    /**
     * Build a collection of breadcrumbs for a given path.
     *
     * @return Collection<int, string>
     */
    public function __invoke(string $path): Collection
    {
        /** Normalize slashes for web */
        $path = str_replace('\\', '/', $path);
        $filesPath = str_replace('\\', '/', $this->config->get('files_path'));

        return Str::explode($path, '/')->diffAssoc(
            explode('/', $filesPath)
        )->filter(
            static fn (string $crumb): bool => ! in_array($crumb, [null, '.'])
        )->reduce(
            fn (Collection $carry, string $crumb): Collection => $carry->put(
                $crumb,
                ltrim($carry->last() . '/' . rawurlencode($crumb), '/')
            ),
            new Collection
        )->map(
            static fn (string $path): string => sprintf('?dir=%s', $path)
        );
    }

}

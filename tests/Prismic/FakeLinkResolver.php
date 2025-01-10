<?php
declare(strict_types=1);

namespace Prismic\Test;

use Prismic\LinkResolver;

class FakeLinkResolver extends LinkResolver
{
    public function resolve($link) :? string
    {
        if ($link->isBroken) {
            return 'http://host/404';
        }

        return 'http://host/doc/'.$link->id;
    }
}

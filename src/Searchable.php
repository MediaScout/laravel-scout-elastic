<?php

namespace Tamayo\LaravelScoutElastic;

trait Searchable
{
    use \Laravel\Scout\Searchable;

    /**
     * @return array
     */
    public function searchableMapping()
    {
        return [];
    }
}

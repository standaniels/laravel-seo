<?php

namespace RalphJSmit\Laravel\SEO\Tags\TwitterCard;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Collection;
use RalphJSmit\Laravel\SEO\Support\RenderableCollection;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use RalphJSmit\Laravel\SEO\Support\TwitterCardTag;

class Summary extends Collection implements Renderable
{
    use RenderableCollection;

    public static function initialize(SEOData $SEOData): static
    {
        $collection = new static();

        $collection->push(new TwitterCardTag('card', 'summary'));

        if ( $SEOData->image ) {
            $collection->push(new TwitterCardTag('image', $SEOData->image));
        }

        return $collection;
    }
}
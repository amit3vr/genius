<?php namespace Genius\Pages;

use Genius,
    Genius\Layout,
    Genius\Event,
    Genius\Announcement;

final class Feed extends Genius\Kernel\PageBase
{
    public function __construct()
    {
        parent::__construct('News Feed');
    }

    private function get_feed_content()
    {
        $feed = array_merge(Announcement::all(['pinned' => 0]), Event::all());

        usort($feed, function($a, $b)
        {
            return (strtotime($b->create_date) - strtotime($a->create_date));
        });

        return $feed;
    }

    private function generate_feed(...$items)
    {
        $feed = array_merge(...$items);

        usort($feed, function($a, $b)
        {
            return (strtotime($b->create_date) - strtotime($a->create_date));
        });

        return $feed;
    }

    protected function generate()
    {
        $layout = new Layout('feed.html');

        $layout->pinned_posts = $this->generate_feed(Announcement::all(['pinned' => true]));
        $layout->regular_posts = $this->generate_feed(Announcement::all(['pinned' => false]), Event::all());

        return $layout->render();
    }
}

?>
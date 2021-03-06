<h2>Flash</h2>

<div class="col col-p">
    <div class="feature">
        <h3>Youtube Playlist</h3>
        <div class="youtube_wrapper">
            <a href="https://www.youtube.com/playlist?list=PLC0D2C2ABFF39CD68" target="_blank" data-embed="https://www.youtube.com/embed/videoseries?list=PLC0D2C2ABFF39CD68&amp;autoplay=0" id="youtube_embed" class="button icon_after icon_after-play youtube_embed">Youtube playlist</a>
        </div>
    </div>
</div>

<div class="col col-s">
    <h3>Stills</h3>
    <div class="imagebox_wrapper no-iv">
        <?php
            $feed      = simplexml_load_file('https://rss.ngfiles.com/users/2389000/fu5ion/flash/');
            $channel   = $feed->channel;
            $i         = 0;

            $map = array(
                'https://jalproductions.co.uk/img/animation/switch.jpg',
                'https://jalproductions.co.uk/img/games/dropthru.jpg',
                'https://picon.ngfiles.com/495000/portal_495315.gif',
                'https://jalproductions.co.uk/img/animation/goodnightfear.jpg',
                'https://jalproductions.co.uk/img/games/alphaspeed.jpg',
                'https://jalproductions.co.uk/img/animation/spawn.jpg',
                'https://jalproductions.co.uk/img/animation/run.jpg',
                'https://picon.ngfiles.com/456000/portal_456855.gif',
                'https://picon.ngfiles.com/436000/portal_436382.gif',
                'https://jalproductions.co.uk/img/games/mashedup.jpg'
            );

            foreach($channel->item as $item):
                $title  = $item->title;
                $title2 = str_replace("\"", "'", $title);
                $url    = $item->link;
                $date   = $item->pubDate;
                $desc   = $item->description;
            ?>
               <div class="imagebox"><a href="<?= $url; ?>" target="_blank"><img src="<?= $map[$i]; ?>" alt="<?= $title2; ?>" title="<?= $title2; ?>"/></a></div>
            <?php
                $i++;
                endforeach;
        ?>
    </div>
</div>
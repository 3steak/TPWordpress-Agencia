 <?php
    add_filter('next_posts_link_attributes', function ($attrs) {
        return $attrs . ' class="btn"';
    });

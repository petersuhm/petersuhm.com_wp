<?php

add_action('wp_enqueue_scripts', function()
{
    wp_enqueue_style('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/styles/dark.min.css');
    wp_enqueue_script('highlight-js', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.4/highlight.min.js');
});

add_action('wp_head', function()
{
    echo "<script>hljs.initHighlightingOnLoad();</script>";
});

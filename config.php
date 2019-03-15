<?php

return [
    'production' => false,
    'baseUrl' => '',
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
    'collections' => [
        'posts',
        'reddit' => [
            'extends' => '_layouts.reddit',
            'items' => function () {
                $posts = json_decode(file_get_contents('https://www.reddit.com/r/aww.json?raw_json=1'));

                return collect($posts->data->children)->map(function ($post) {
                    return [
                        'id' => $post->data->id,
                        'title' => $post->data->title,
                        'thumbnail' => $post->data->thumbnail,
                        'content' => "![alt text](".$post->data->preview->images[0]->source->url.")"
                    ];
                });
            },
        ],
    ],
];

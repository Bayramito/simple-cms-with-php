<?php

$meta = [
    'title' => setting('site_title'),
    'description' => setting('site_description'),
    'keywords'    => setting('site_keywords'),
    'author'       => setting('author')
    ];

$row = User::UserExist(session('username'));



require view('index');
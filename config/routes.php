<?php
return array(
    'videos/([0-9]+)' =>'videos/view/$1',
    'film/([0-9]+)' =>'film/view/$1',
    'serial/([0-9]+)' =>'serial/view/$1',
    'search' => 'search/index',
    'category/([0-9]+)/page-([0-9]+)' =>'category/view/$1/$2',
    'genre/([0-9]+)/page-([0-9]+)' =>'genre/view/$1/$2',
    'user/register' => 'user/register',
    '' => 'site/index',


//
);
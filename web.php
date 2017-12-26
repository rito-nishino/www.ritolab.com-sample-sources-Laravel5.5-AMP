<?php

// 通常ページ
Route::get('sample/page', 'PageController@index');
// AMPページ
Route::get('sample/page.amp', 'PageController@index');

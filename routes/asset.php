<?php

Route::get(
    'assets/awema-pl/{moduleName}/{fileType}/{file}',
    '\AwemaPL\Assets\Controllers\AssetController@asset'
)->name('module-assets.assets');

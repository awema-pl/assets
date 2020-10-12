<?php

Route::get(
    'assets/awema-pl/{moduleName}/{fileType}/{filePath}',
    '\AwemaPL\Assets\Controllers\AssetController@asset'
)->name('module-assets.assets')->where('filePath', '(.*)');;

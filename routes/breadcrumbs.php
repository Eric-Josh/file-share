<?php

use App\DataSources;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});
Breadcrumbs::for('page.index', function ($trail, $pages) {
    $trail->push('Home', route('page.index',$pages));
});
Breadcrumbs::for('profile.edit', function ($trail) {
    $trail->parent('home');
    $trail->push('Profile', route('profile.edit'));
});

Breadcrumbs::for('datasource.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Data Sources', route('datasource.index'));
});
Breadcrumbs::for('datasource.create', function ($trail) {
    $trail->parent('datasource.index');
    $trail->push('New Data Source', route('datasource.create'));
});
Breadcrumbs::for('datasource.edit', function ($trail, $id) {
    $datasource = DataSources::find($id);
    $trail->parent('datasource.index');
    $trail->push($datasource->data_source, route('datasource.edit', $id));
});

Breadcrumbs::for('filedump.index', function ($trail) {
    $trail->parent('home');
    $trail->push('File Upload', route('filedump.index'));
});
Breadcrumbs::for('filedump.create', function ($trail) {
    $trail->parent('filedump.index');
    $trail->push('New File Upload', route('filedump.create'));
});
// Breadcrumbs::for('filedump.edit', function ($trail, $id) {
//     $datasource = DataSources::find($id);
//     $trail->parent('filedump.index');
//     $trail->push($datasource->data_source, route('datasource.edit', $id));
// });
?>
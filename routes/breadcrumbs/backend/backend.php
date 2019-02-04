<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Ahmad_start
Breadcrumbs::register('admin.ahmad.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.ahmads.title'),
        route('admin.ahmad.index')
    );
});

Breadcrumbs::register('admin.ahmad.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.ahmad.index');
    $breadcrumbs->push(
        __('labels.backend.ahmads.create'),
        route('admin.ahmad.create')
    );
});

Breadcrumbs::register('admin.ahmad.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ahmad.index');
    $breadcrumbs->push(
        __('menus.backend.ahmads.view'),
        route('admin.ahmad.show', $id)
    );
});

Breadcrumbs::register('admin.ahmad.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.ahmad.index');
    $breadcrumbs->push(
        __('menus.backend.ahmads.edit'),
        route('admin.ahmad.edit', $id)
    );
});
//end_Ahmad_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

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

//start_First_start
Breadcrumbs::register('admin.first.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.firsts.title'),
        route('admin.first.index')
    );
});

Breadcrumbs::register('admin.first.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.first.index');
    $breadcrumbs->push(
        __('labels.backend.firsts.create'),
        route('admin.first.create')
    );
});

Breadcrumbs::register('admin.first.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.first.index');
    $breadcrumbs->push(
        __('menus.backend.firsts.view'),
        route('admin.first.show', $id)
    );
});

Breadcrumbs::register('admin.first.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.first.index');
    $breadcrumbs->push(
        __('menus.backend.firsts.edit'),
        route('admin.first.edit', $id)
    );
});
//end_First_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

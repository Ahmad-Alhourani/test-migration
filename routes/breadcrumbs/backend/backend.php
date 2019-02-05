<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(
        __('strings.backend.dashboard.title'),
        route('admin.dashboard')
    );
});

//start_Test_start
Breadcrumbs::register('admin.test.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.tests.title'),
        route('admin.test.index')
    );
});

Breadcrumbs::register('admin.test.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.test.index');
    $breadcrumbs->push(
        __('labels.backend.tests.create'),
        route('admin.test.create')
    );
});

Breadcrumbs::register('admin.test.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test.index');
    $breadcrumbs->push(
        __('menus.backend.tests.view'),
        route('admin.test.show', $id)
    );
});

Breadcrumbs::register('admin.test.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.test.index');
    $breadcrumbs->push(
        __('menus.backend.tests.edit'),
        route('admin.test.edit', $id)
    );
});
//end_Test_end

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

//start_School_start
Breadcrumbs::register('admin.school.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.schools.title'),
        route('admin.school.index')
    );
});

Breadcrumbs::register('admin.school.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.school.index');
    $breadcrumbs->push(
        __('labels.backend.schools.create'),
        route('admin.school.create')
    );
});

Breadcrumbs::register('admin.school.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.school.index');
    $breadcrumbs->push(
        __('menus.backend.schools.view'),
        route('admin.school.show', $id)
    );
});

Breadcrumbs::register('admin.school.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.school.index');
    $breadcrumbs->push(
        __('menus.backend.schools.edit'),
        route('admin.school.edit', $id)
    );
});
//end_School_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

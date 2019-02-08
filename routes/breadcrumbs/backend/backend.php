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

//start_Student_start
Breadcrumbs::register('admin.student.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.students.title'),
        route('admin.student.index')
    );
});

Breadcrumbs::register('admin.student.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push(
        __('labels.backend.students.create'),
        route('admin.student.create')
    );
});

Breadcrumbs::register('admin.student.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push(
        __('menus.backend.students.view'),
        route('admin.student.show', $id)
    );
});

Breadcrumbs::register('admin.student.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.student.index');
    $breadcrumbs->push(
        __('menus.backend.students.edit'),
        route('admin.student.edit', $id)
    );
});
//end_Student_end

//start_Company_start
Breadcrumbs::register('admin.company.index', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.dashboard');
    $breadcrumbs->push(
        __('strings.backend.companies.title'),
        route('admin.company.index')
    );
});

Breadcrumbs::register('admin.company.create', function ($breadcrumbs) {
    $breadcrumbs->parent('admin.company.index');
    $breadcrumbs->push(
        __('labels.backend.companies.create'),
        route('admin.company.create')
    );
});

Breadcrumbs::register('admin.company.show', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.company.index');
    $breadcrumbs->push(
        __('menus.backend.companies.view'),
        route('admin.company.show', $id)
    );
});

Breadcrumbs::register('admin.company.edit', function ($breadcrumbs, $id) {
    $breadcrumbs->parent('admin.company.index');
    $breadcrumbs->push(
        __('menus.backend.companies.edit'),
        route('admin.company.edit', $id)
    );
});
//end_Company_end

//*****Do Not Delete Me

require __DIR__ . '/auth.php';
require __DIR__ . '/log-viewer.php';

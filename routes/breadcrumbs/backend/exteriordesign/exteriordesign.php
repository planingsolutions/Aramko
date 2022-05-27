<?php

Breadcrumbs::for('admin.MainsectionPage3', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Main Section'), route('admin.MainsectionPage3'));
});

Breadcrumbs::for('admin.Aboutussection', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section1'), route('admin.Aboutussection'));
});

Breadcrumbs::for('admin.AboutussectionTwo', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section2'), route('admin.AboutussectionTwo'));
});

Breadcrumbs::for('admin.AboutussectionTableThree', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section3'), route('admin.AboutussectionTableThree'));
});

Breadcrumbs::for('admin.ServicessOneTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servicessOne'), route('admin.ServicessOneTable'));
});

Breadcrumbs::for('admin.ServicessTwoTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servicessTwo'), route('admin.ServicessTwoTable'));
});

Breadcrumbs::for('admin.ServicessThreeTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.servicessThree'), route('admin.ServicessThreeTable'));
});

Breadcrumbs::for('admin.ProjectsTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Our Projects'), route('admin.ProjectsTable'));
});


Breadcrumbs::for('admin.Jobforms', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Job Forms'), route('admin.Jobforms'));
});






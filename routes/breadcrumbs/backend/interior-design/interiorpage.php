<?php

Breadcrumbs::for('admin.MainsectionTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Main Section'), route('admin.MainsectionTable'));
});



Breadcrumbs::for('admin.AboutussectionTablesection1', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Main Section'), route('admin.AboutussectionTablesection1'));
});


Breadcrumbs::for('admin.AboutussectionMain', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section2-Main'), route('admin.AboutussectionMain'));
});



Breadcrumbs::for('admin.aboutuslists', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section2-Lists'), route('admin.aboutuslists'));
});



Breadcrumbs::for('admin.aboutussection3', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section3'), route('admin.aboutussection3'));
});


Breadcrumbs::for('admin.ServicessTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Servicess'), route('admin.ServicessTable'));
});


Breadcrumbs::for('admin.testimonials', function ($trail) {
    $trail->push(__('labels.backend.access.Home.testimonials'), route('admin.testimonials'));
});



Breadcrumbs::for('admin.Websitedetails', function ($trail) {
    $trail->push(__('labels.backend.access.Home.website details'), route('admin.Websitedetails'));
});

Breadcrumbs::for('admin.SocialMediaTable', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Social Media'), route('admin.SocialMediaTable'));
});


Breadcrumbs::for('admin.contactshow', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Conact'), route('admin.contactshow'));
});


// all project

// project1
Breadcrumbs::for('admin.fuelstations', function ($trail) {
    $trail->push(__('labels.backend.access.Home.fuel stations'), route('admin.fuelstations'));
});

// project2
Breadcrumbs::for('admin.industrialfacilities', function ($trail) {
    $trail->push(__('labels.backend.access.Home.industrial facilities'), route('admin.industrialfacilities'));
});

// project3
Breadcrumbs::for('admin.medicalfacilities', function ($trail) {
    $trail->push(__('labels.backend.access.Home.medical facilities'), route('admin.medicalfacilities'));
});


// project4
Breadcrumbs::for('admin.ProjectFour', function ($trail) {
    $trail->push(__('labels.backend.access.Home.educational and administrative facilities'), route('admin.ProjectFour'));
});












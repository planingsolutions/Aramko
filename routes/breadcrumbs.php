<?php

require __DIR__.'/breadcrumbs/backend/backend.php';

Breadcrumbs::for('admin.AboutussectionTable3', function ($trail) {
    $trail->push(__('labels.backend.access.Home.Section3'), route('admin.AboutussectionTable3'));
});
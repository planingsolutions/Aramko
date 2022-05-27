<?php

namespace App\Models\Traits\Attributes;

trait Mainsection
{
    /**
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group" role="group" aria-label="'.trans('labels.backend.access.users.user_actions').'">'.
                $this->getEditButtonAttribute('View-Main-Section', 'admin.Edit-MainsectionTable').
                $this->getDeleteButtonAttribute('delete-Main-Section-records', 'admin.Delete-MainsectionTable').
                '</div>';
    }

    /**
     * Get Display Status Attribute.
     *
     * @var string
     */
  
    /**
     * Get Statuses Attribute.
     *
     * @var string
     */
   
}

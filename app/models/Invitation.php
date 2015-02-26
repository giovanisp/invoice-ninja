<?php

class Invitation extends EntityModel
{
    public function invoice()
    {
        return $this->belongsTo('Invoice');
    }

    public function contact()
    {
        return $this->belongsTo('Contact')->withTrashed();
    }

    public function user()
    {
        return $this->belongsTo('User')->withTrashed();
    }

    public function getLink()
    {
        return SITE_URL.'/view/'.$this->invitation_key;
    }
}

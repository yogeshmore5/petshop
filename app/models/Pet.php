<?php
class Pet extends Eloquent{
	public function services()
    {
        return $this->belongsToMany('service', 'pet_service');
    }
}
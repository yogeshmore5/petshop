<?php
class Service extends Eloquent{
	public function pets()
    {
        return $this->belongsToMany('pet', 'pet_service');
    }
}
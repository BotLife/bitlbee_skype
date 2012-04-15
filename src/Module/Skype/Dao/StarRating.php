<?php

namespace Botlife\Module\Skype\Dao;

class StarRating
{
    
    public function getRating($rating, \Botlife\Application\Colors $color = null)
    {
        if (!$color) {
            $color = new \Botlife\Application\Colors;
        }
        $rating = round($rating, 0);
        $str = str_repeat('★', $rating);
        return $str;
    }
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function tooltipCarolije($i, $lik, $var)
{
    if($lik==='mage' && $i===1)
    {
        $var='prva carolija mage';
        return $var;
    }
    
    else if($lik==='mage' && $i===2)
    {
        $var='druga carolija mage';
        return $var;
    }
    
    else if($lik==='mage' && $i===3)
    {
        $var='treca carolija mage';
        return $var;
    }
    else if($lik==='warr' && $i===1)
    {
        $var='prva carolija warrior';
        return $var;
    }
    
    else if($lik==='warr' && $i===2)
    {
        $var='druga carolija warrior';
        return $var;
    }
    else if($lik==='warr' && $i===3)
    {
        $var='treca carolija warrior';
        return $var;
    }
    else if($lik==='heal' && $i===1)
    {
        $var='prva carolija liječnik';
        return $var;
    }
    
    else if($lik==='heal' && $i===2)
    {
        $var='druga carolija liječnik';
        return $var;
    }
    else if($lik==='heal' && $i===3)
    {
        $var='treca carolija liječnik';
        return $var;
    }
}



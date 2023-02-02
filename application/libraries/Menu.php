<?php
Class Menu {
    function getmenustatus($param2,$param3){
        $menubrand = "";
        $menucarousel = "";
        $menuvideo = "";
        $menusponsor = "";
        $menuusers = "";
        $menuseqwences = "";
        switch($param3){
            case "brand":
                $menubrand = " menu-open";
            break;
            case "carousel":
                $menucarousel = " menu-open";            
            break;
            case "video":
                $menuvideo = " menu-open";
            break;
            case "sponsor":
                $menusponsor = " menu-open";
            break;
            case "user":
                $menuusers = "menu-open";
            break;
            case "seqwences":
                $menuseqwences = "menu-open";
            break;
        }
        $activebrand = array();$activecarousel = array();
        for($x=1;$x<=5;$x++){
            $active['brand'][$x] = '';
            $active['carousel'][$x] = '';
        }
        for($x=1;$x<=5;$x++){
            if(strval($x)===$param2){
                $active[$param3][$x] = ' active';
            }else{
                $active[$param3][$x] = '';
            }        
        }
        return array(
            'menubrand'=>$menubrand,
            'menucarousel'=>$menucarousel,
            'menuvideo'=>$menuvideo,
            'menusponsor'=>$menusponsor,
            'menuusers'=>$menuusers,
            'menuseqwences'=>$menuseqwences,
            'activebrand'=>$active['brand'],
            'activecarousel'=>$active['carousel'],
            'activeuser'=>$active['brand'],
            'activevideo'=>$active['carousel'],
            'activeseqwence'=>$active['brand'],
            'activesponsor'=>$active['brand']
        );
    }

}
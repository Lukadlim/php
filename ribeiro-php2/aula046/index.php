<?php
    $data_nasc = new DateTime('2000-04-16');

    function calc_ida($nasc){
        $now = new DateTime();
        $idade = $now->format('y') - $nasc->format('y');

        if($nasc->format('Y') == $now->format('Y')){
            if($nasc->format('m') < $now->format('m')){
                if($nasc->format('d') > $now->format('d')){
                    $idade = $now->format('m') - $nasc->format('m');
                    $idade-- ;
                } else {
                    $idade = $now->format('m') - $nasc->format('m');
                }
                return $idade . ' mese(s)';
            } elseif($nasc->format('m') == $now->format('m')){
                return 'Não tem nem 1 mês de idade';
            }
        } elseif($nasc->format('m') > $now->format('m')){
            $idade-- ;
        } elseif($nasc->format('m') == $now->format('m') and $nasc->format('d') > $now->format('d')){
            $idade-- ;
        }

        return "$idade ano(s)";
    }

    echo calc_ida($data_nasc);
?>
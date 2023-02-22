<?php

/**
 * กรองเอาเฉพาะวันที่
 * string SlashDateOnly( '12/09/1984 XX' ); //output: 12/09/1984
 */
function SlashDateOnly($strDate = "")
{
    if (empty($strDate))
        return;

    $strDate = str_replace('/', '-', $strDate);
    $slashDate = date('d/m/Y', strtotime($strDate));

    return $slashDate;
}
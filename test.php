<?php

function callMe($hey)
{
    return 'Hello Bro ' . $hey;
}

function callWithParam($param)
{
    return $param . ' is param';
}


echo callMe("Oh My ZSH");
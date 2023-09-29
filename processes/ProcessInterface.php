<?php

interface ProcessInterface {
    function Conn();
    function Submit($FN, $EM, $P);
    function Form($N, $W);
    function Post();
}


?>
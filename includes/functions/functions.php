<?php
/**
 * If https is used as protocol
 * @return boolean
 */
function isHttps(){
    return !empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] !== "off";
}
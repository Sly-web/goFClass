<?php
if(!defined('APP')) die('Direct access is not allowed');

/* ==========================================================================
   ROUTER - PUBLIC
   ========================================================================== */
$app->get('/api', function(){
  echo "API";
});

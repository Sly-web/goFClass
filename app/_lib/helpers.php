<?php

function snippet($snippet, $data=array(), $return=false) {
  return tpl::load(c::get('APP_PATH_SNIPPETS') . $snippet . '.php', $data, $return);
}

function dump($var) {
  return a::show($var);
}

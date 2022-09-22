<?php

/**
 * Require a view.
 *
 * @param  string $name
 * @param  array  $data
 */
function view($name, $data = [])
{
    extract($data);

    return require "app/Views/{$name}.view.php";
}

/**
 * Redirect to a new page.
 *
 * @param  string $path
 */
function redirect($path)
{
    header("Location: /{$path}");
}

/**
 * Dump an array.
 *
 * @param  array $data
 */
function dd($data){
    if($data){
        echo "<pre><div style='color:#ffffff;background:black'>";
        print_r($data);
        echo "</div></pre>";
        exit;
    }
}

/**
 * return an array of request.
 *
 * @param  string $key
 * @return  mixed $ob
 */
function request($key='')
{
    $ob=(object)array('get'=>[],'post'=>[]);
    $ob->get=$_GET;
    unset($ob->get['url']);

    $ob->post=$_POST;

    if($key){
        if(array_key_exists($key,$ob->post)){
            return $ob->post[$key];
        }
        if(array_key_exists($key,$ob->get)){
            return $ob->get[$key];
        }
        return null;
    }
    return $ob;
}

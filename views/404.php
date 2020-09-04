<?php

include_once "includes/composants/nav-bar.php";

?>

<div id="main">
    <div class="fof">
        <h1>Error 404</h1>
    </div>
</div>

<style>

    #main{
        display: table;
        width: 100%;
        height: 80vh;
        text-align: center;
    }

    .fof{
        display: table-cell;
        vertical-align: middle;
    }

    .fof h1{
        font-size: 50px;
        display: inline-block;
        padding-right: 12px;
        animation: type .5s alternate infinite;
    }

    @keyframes type{
        from{box-shadow: inset -3px 0px 0px #888;}
        to{box-shadow: inset -3px 0px 0px transparent;}
    }
</style>
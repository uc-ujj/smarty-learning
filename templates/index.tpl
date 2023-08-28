<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .first-word {
            color: cornflowerblue;
        }
    </style>
</head>
<body>
    {* Basic Syntax *}
    <h1>{$title|escape}</h1>

    <ul>
        
        {foreach $cities as $city}
            <li>{$city.name|escape} ({$city.population})</li>
        {foreachelse}
            <li>No Cities Found</li>
        {/foreach}
    </ul>
    <h2>{$cities[0].population}</h2>

    {* Commenting *}
    <!-- This is an HTML comment which is sent to the browser -->

    {* 
    this is a multiline smarty
    comment
    and is not sent to the browser 
    *}

    {******************************
        Multi line comment Credits block 
        @author:        ujjawal.gupta@ucertify.com
        @maintainer:    admin@ucertify.com
        @para: 
        @css:           the style output
    *******************************}

    {#title#}

    <h2 class="first-word">{$word1}</h2>
    {$name_arr}

    {* Traversing inside array and converting it's value to String *}
    <ul>
        {foreach $players as $player}
        <li>{implode(', ', $player)}</li>
        {/foreach}
    </ul>

    {* Using Object *}
    <p>User: {$user->name}</p>
    <p>User: {$user->profile}</p>

    {* Conditional if / else *}
    {if $user->profile == 'admin'}
        <p><a href="#">Manage Users</a></p>
    {else}
        <p><a href="#">My Profile</a></p>
    {/if}

    {add(2)}
    
</body>
</html>

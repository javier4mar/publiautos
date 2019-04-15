<ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
    <li class=" navigation-header">
        <span>General</span><i data-toggle="tooltip" data-placement="right" data-original-title="General"
                               class=" ft-minus"></i>
    </li>
    {$x = 0}
    {$y = 0}
    {foreach from=$menus key=i item=$menu}

    {if {$menu->nivel} == 1}
    <li class=" nav-item">
        <a href="{$menu->url}">
            <i class="{$menu->icon}"></i>
            <span data-i18n="" class="menu-title">{$menu->nombre}</span>
        </a>
        {if {$menu->idPagina} != {$menus[{$i+1}]->idPadre}}
    </li>
    {/if}
    {elseif {$menu->nivel} == 2}

    {if {$menu->idPagina} == {$menus[{$i+1}]->idPadre}} <!-- tiene hijos-->

    <li class=" nav-item">
        <a href="{$menu->url}">
            <i class="{$menu->icon}"></i>
            <span data-i18n="" class="menu-title">{$menu->nombre}</span>
        </a>

        {else}
        {if {$y} == 0}
        <ul class="menu-content">
            {/if}

            <li><a href="{$menu->url}" class="menu-item">{$menu->nombre}</a></li>
            {$y = $y+1}


            {if {$menu->idPadre} != {$menus[{$i+1}]->idPadre}}
        </ul>
        {$y = 0}
        {/if}


        {/if}

        {elseif {$menu->nivel} == 3}
        {if {$x} == 0}
        <ul class="menu-content">
            {/if}
            <li><a href="{$menu->url}" class="menu-item">{$menu->nombre}</a></li>
            {$x = $x+1}
            {if {$menu->idPadre} != {$menus[{$i+1}]->idPadre}}
        </ul>

        {$x = 0}
        {/if}


        {/if}


        {/foreach}

</ul>

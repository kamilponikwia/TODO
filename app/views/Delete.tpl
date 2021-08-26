{extends file="main.tpl"}                
{block name=delete}
<div class="content delete">
	<h2>Usuń zadanie #{$task['id']}</h2>
        {if $msg }
            <p>{$msg}</p>
        {else}
            <p>Czy na pewno chcesz usunąć zadanie #{$task['id']}?</p>
            <div class="yesno">
                <a href="{$conf->action_root}remove?id={$task['id']}&confirm=yes">Tak</a>
                <a href="{$conf->action_root}remove?id={$task['id']}&confirm=no">Nie</a>
            </div
        {/if}
</div>
{/block}









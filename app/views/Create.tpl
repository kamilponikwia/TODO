{extends file="main.tpl"}                
{block name=create}
<div class="content update">
    <h2>TODO - Dodaj zadanie</h2>
    <form action="{$conf->action_root}add" method="post">
        <input disabled type="hidden" type="text" name="id" placeholder="" value="auto" id="id">
        <label for="name" placeholder="wpisz tutaj...">Nazwa</label>
        
        <input type="text" name="name" placeholder="wpisz tutaj..." id="name">
        <label for="created">Data</label>
        
        <input type="datetime-local" name="created" value="{date('Y-m-d\TH:i:s')}" id="created">
        <input type="submit" value="Dodaj">
    </form>
    {if $msg}
    <p>{$msg}</p>
    {/if}
</div>
{/block}









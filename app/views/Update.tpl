{extends file="main.tpl"}    

{block name=update}
    <div class="content update">
        <h2>Edytuj zadanie #{$task['id']}</h2>
        <form action="{$conf->action_root}edit?id={$task['id']}" method="post">
            <label for="name">Nazwa</label>
            <input type="hidden" type="text" name="id" placeholder="" value="{$task['id']}" id="id">
            <input type="text" name="name" placeholder="" value="{$task['name']}" id="name">
            <label for="created">Data</label>
            <input type="datetime-local" name="created" value="{date('Y-m-d\TH:i:s', strtotime($task['created']))}" id="created">
            <input type="submit" value="Zaktualizuj">
        </form>
        {if $msg}
        <p>{$msg}</p>
        {/if}
    </div>
{/block}









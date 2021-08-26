{extends file="main.tpl"}    

{block name=tasks}
    <div class="content read">
        <h2>TODO - Lista zadań</h2>
        <a href="{$conf->action_root}add" class="create-contact">Dodaj zadanie</a>
        <table>
            <thead>
                <tr>
                    <td>#</td>
                    <td>Nazwa</td>
                    <td>Dodane</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                {foreach $tasks as $task}
                    {strip}
                        <tr>
                            <td>{$task["id"]}</td>
                            <td>{$task["name"]}</td>
                            <td>{$task["created"]}</td>

                            <td class="actions">
                                <a href="{$conf->action_root}edit?id={$task["id"]}" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                                <a href="{$conf->action_root}remove?id={$task["id"]}" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                            </td>
                        </tr>
                    {/strip}
                {/foreach}
            </tbody>
        </table>
    </div>
{/block}









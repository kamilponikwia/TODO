{extends file="main.tpl"}   

{block name=profile}
    <div class="content">
        <h2>TODO - Twój profil</h2>
        <div>
            <p>Dane Twojego konta znajdują się poniżej:</p>
            <table>
                {foreach $users as $user}
                    {strip}
                        <tr>
                            <td>Nazwa użytkownika:</td>
                            <td>{$smarty.session.name}</td>
			</tr>
			<tr>
                            <td>Hasło:</td>
                            <td>{$user['password']}</td>
			</tr>
			<tr>
                            <td>Adres e-mail:</td>
                            <td>{$user['email']}</td>
			</tr>
                   {/strip}
                {/foreach}
            </table>
	</div>
    </div>
{/block}
<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   auth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugins de autenticação disponíveis';
$string['allowaccountssameemail'] = 'Permitir contas diferentes com o mesmo e-mail';
$string['allowaccountssameemail_desc'] = 'Se ativado, mais do que uma conta de usuário podem compartilhar o mesmo endereço de e-mail. Isso pode resultar em problemas de segurança ou privacidade, por exemplo, com o e-mail de confirmação de alteração de senha .';
$string['alternatelogin'] = 'Para substituir a página padrão de login é necessário indicar aqui uma outra URL. Esta deve conter um formulário que contenha a propriedade de ação configurada <strong>\'{$a}\'</strong> e retornar os campos <strong>username</strong> e <strong>password</strong>.<br />Atenção, com uma URL errada você pode ficar bloqueado sem acesso a este site.<br />Deixe este ajuste em branco para usar a página login padrão.';
$string['alternateloginurl'] = 'URL alternativa para login';
$string['auth_changepasswordhelp'] = 'Ajuda para mudança de senha';
$string['auth_changepasswordhelp_expl'] = 'Mostrar ajuda para recuperação de senhas {$a} perdidas. Isto será mostrado junto ou em alternativa à <strong>URL  mudança de senha</strong> ou ao sistema de mudanças de senha interno de Moodle.';
$string['auth_changepasswordurl'] = 'URL para mudança de senha';
$string['auth_changepasswordurl_expl'] = 'Indicar a URL a ser enviada aos usuários que perderem a senha {$a} . Configure a opção <strong>Usar página padrão para mudança de senha</strong> como <strong>Não</strong>.';
$string['auth_changingemailaddress'] = 'Você pediu a mudança do email de {$a->oldemail} para {$a->newemail}. Estamos enviando um email ao novo endereço para confirmação. Clique o link no email para completar o processo de atualização.';
$string['auth_common_settings'] = 'Configurações comuns';
$string['auth_data_mapping'] = 'Mapeamento dos dados';
$string['authenticationoptions'] = 'Opções de autenticação';
$string['auth_fieldlock'] = 'Bloquear valor';
$string['auth_fieldlock_expl'] = '<p><b>Bloquear valor:</b> Quando ativado, impede que usuários e administradores modifiquem o campo diretamente. usar esta opção quando os dados são mantidos em sistemas de autenticação externos. </p>';
$string['auth_fieldlockfield'] = 'Bloquear ({$a})';
$string['auth_fieldlocks'] = 'Bloquear campos de usuário';
$string['auth_fieldlocks_help'] = '<p>Você pode bloquear campos de dados de usuários. Isto é útil em sites mantidos pelo administrador manualmente, editando os registros dos usuários ou usando a função \'Upload de usuários\'. Se você bloquear campos exigidos pelo Moodle, forneça estes dados quando criar as contas de usuários &emdash; ou as contas não serão utilizáveis.</p><p>Considere a possibilidade de configurar o bloqueio como \'Desbloqueado se vazio\' para evitar este problema.</p>';
$string['auth_fieldmapping'] = 'Mapeamento de dados ({$a})';
$string['authinstructions'] = 'Deixe em branco para as instruções de login padrão serem exibidas na página de login. Se você quiser fornecer instruções de login personalizadas, insira-as aqui.';
$string['auth_invalidnewemailkey'] = 'Erro: se você está tentando confirmar a mudança de endereço email, provavelmente copiou o URL incompleto. Tente novamente.';
$string['authloginviaemail'] = 'Permite login via e-mail';
$string['authloginviaemail_desc'] = 'Permitir que os usuários usem tanto a identificação como o endereço de e-mail (se único) para fazer login no site.';
$string['auth_multiplehosts'] = 'Hosts múltiplos podem ser definidos, por exemplo: host1.com;host2.com;host3.com';
$string['auth_notconfigured'] = 'O método de autenticação {$a} não está configurado.';
$string['auth_outofnewemailupdateattempts'] = 'Você superou o número máximo de tentativas para atualizar seu endereço de email. O seu pedido de atualização foi cancelado.';
$string['auth_passwordisexpired'] = 'A sua senha expirou. Você deve alterar a sua senha agora.';
$string['auth_passwordwillexpire'] = 'Sua senha expirará em {$a} dias. Deseja alterar sua senha agora?';
$string['auth_remove_delete'] = 'Excluir interno completamente';
$string['auth_remove_keep'] = 'Manter interno';
$string['auth_remove_suspend'] = 'Suspender interno';
$string['auth_remove_user'] = 'Especifique o que fazer com as contas internas de usuário durante uma sincronização em massa quando o usuário for removido de uma fonte externa. Apenas os usuários suspensos são reativados automaticamente quando reaparecem na fonte externa.';
$string['auth_remove_user_key'] = 'Usuário externo removido';
$string['auth_sync_script'] = 'Sincronização de conta de usuário';
$string['auth_sync_suspended'] = 'Quando ativado, o atributo suspenso será usado para atualizar o status de suspensão conta de usuário local.';
$string['auth_sync_suspended_key'] = 'Sincronizar status de suspensão usuário local';
$string['auth_updatelocal'] = 'Atualização local';
$string['auth_updatelocal_expl'] = '<p><b>Atualizar local data:</b> Se estiver ativado, o campo será atualizado (por auth externo) toda vez que o usuário fizer o login ou houver uma sincronização de usuários. Os campos configurados para serem atualizados localmente devem ser bloqueados.</p>';
$string['auth_updatelocalfield'] = 'Atualizar local ({$a})';
$string['auth_updateremote'] = 'Atualizar dados externos';
$string['auth_updateremote_expl'] = '<p><b>Atualizar dados externos:</b> Se estiver ativado, o sistema de autenticação externo será atualizado quando o registro do usuário for atualizado. Os campos devem ser desbloqueados para permitir a edição.</p>';
$string['auth_updateremotefield'] = 'Atualização externa ({$a})';
$string['auth_updateremote_ldap'] = '<p><b>Atenção:</b> A atualização de dados LDAP externos requer a configuração de binddn e bindpw para um bind-user com direitos de edição de todos os records dos usuários. Atualmente não são conservados atributos multi-valores, os valores extra serão removidos durante a atualização. </p>';
$string['auth_user_create'] = 'Permitir criação de usuário';
$string['auth_user_creation'] = 'Novos usuários (anônimos) podem criar contas de usuários no código de origem externa confirmados via Email. Se você ativar esta permissão lembre-se de configurar também as opções específicas dos módulos para a criação de usuários.';
$string['auth_usernameexists'] = 'O identificador de usuário escolhido já existe. Por favor, escolha outro.';
$string['auto_add_remote_users'] = 'Adicionar usuários remotos automaticamente';
$string['changepassword'] = 'URL para mudança de senha';
$string['changepasswordhelp'] = 'URL da página de recuperação de senha, que será enviado para usuários em um e-mail. Note que esta definição não terá efeito se um URL de recuperação de senha é definido nas configurações comuns de autenticação.';
$string['chooseauthmethod'] = 'Escolha um método de autenticação';
$string['chooseauthmethod_help'] = 'Esta definição determina o método de autenticação usado quando o usuário fizer login. Somente plugins de autenticação habilitados devem ser escolhidos, caso contrário, o usuário não será mais capaz de efetuar login. Para bloquear o usuário de logar, selecione "Nenhum login".';
$string['createpassword'] = 'Gerar senha e notificar usuário';
$string['createpasswordifneeded'] = 'Criar senha se necessário, e enviar via e-mail';
$string['emailchangecancel'] = 'Excluir mudança no email';
$string['emailchangepending'] = 'Atualização pendente. Seguir as indicações do email enviado a {$a->preference_newemail}.';
$string['emailnowexists'] = 'O endereço email escolhido já foi utilizado por um outro usuário. Use um outro endereço.';
$string['emailupdate'] = 'Mudança de endereço email';
$string['emailupdatemessage'] = 'Prezado {$a->fullname},

Você solicitou uma alteração de seu endereço de e-mail para sua conta de usuário em {$a->site}. Acesse a seguinte URL no seu navegador para confirmar essa alteração.

Se você tiver alguma dúvida entre em contato com o suporte em: {$a->supportemail}

{$a->url}';
$string['emailupdatesuccess'] = 'Endereço email do usuário <em>{$a->fullname}</em> substituito por <em>{$a->email}</em>.';
$string['emailupdatetitle'] = 'Confirmação de atualização de endereço email em {$a->site}';
$string['enterthenumbersyouhear'] = 'Digite os números que você ouvir';
$string['enterthewordsabove'] = 'Digite as palavras acima';
$string['errormaxconsecutiveidentchars'] = 'As senhas devem ter no máximo {$a} caracteres consecutivos idênticos.';
$string['errorminpassworddigits'] = 'Senhas devem ter no mínimo {$a} digito(s)';
$string['errorminpasswordlength'] = 'Senhas tem que ter no mínimo {$a} caracteres.';
$string['errorminpasswordlower'] = 'Senhas precisam ter no mínimo {$a} letra(s) minúscula(s).';
$string['errorminpasswordnonalphanum'] = 'Senhas precisam ter no mínimo {$a} caractere(s) não-alfanumérico(s), como *, -, ou #.';
$string['errorminpasswordupper'] = 'Senhas precisam ter no mínimo {$a} letra(s) maiúscula(s).';
$string['errorpasswordreused'] = 'Esta senha foi usada antes, e não é permitido reutilizá-la';
$string['errorpasswordupdate'] = 'Erro ao atualizar senha. Não houve modificação.';
$string['eventuserloggedin'] = 'Usuário se logou';
$string['eventuserloggedinas'] = 'Usuário logado como outro usuário';
$string['eventuserloginfailed'] = 'Login de usuário falhou';
$string['forcechangepassword'] = 'Forçar mudança de senha';
$string['forcechangepasswordfirst_help'] = 'Forçar usuários a mudar de senha no primeiro login';
$string['forcechangepassword_help'] = 'Forçar usuários a mudar de senha na próxima vez que fizerem o login';
$string['forgottenpassword'] = 'Se você colocar uma URL aqui, ela será usada como a página de recuperação de senha desse site. Isso é necessário para senhas que são administradas totalmente fora do Moodle. Deixe em branco para usar a página padrão do Moodle.';
$string['forgottenpasswordurl'] = 'URL para \'Esqueci minha senha\'';
$string['getanaudiocaptcha'] = 'Confirmação por áudio';
$string['getanimagecaptcha'] = 'Confirmação por imagem';
$string['getanothercaptcha'] = 'Mudar imagem';
$string['guestloginbutton'] = 'Botão de entrada como visitante';
$string['incorrectpleasetryagain'] = 'Incorreto. Por favor, tente novamente.';
$string['infilefield'] = 'Campos obrigatórios no arquivo';
$string['informminpassworddigits'] = 'ao menos {$a} dígito(s)';
$string['informminpasswordlength'] = 'ao menos {$a} caracteres';
$string['informminpasswordlower'] = 'ao menos {$a} letra(s) minúscula(s)';
$string['informminpasswordnonalphanum'] = 'no mínimo {$a} caractere(s) não alfa-numéricos, como *, -, ou #.';
$string['informminpasswordreuselimit'] = 'As senhas podem ser reutilizadas após {$a} mudanças';
$string['informminpasswordupper'] = 'ao menos {$a} letra(s) maiúscula(s)';
$string['informpasswordpolicy'] = 'A senha deve ter {$a}';
$string['instructions'] = 'Instruções';
$string['internal'] = 'Interno';
$string['limitconcurrentlogins'] = 'Limitar logins simultâneos';
$string['limitconcurrentlogins_desc'] = 'Se habilitado, o número de logins do navegador simultâneas para cada usuário é restrito. A sessão mais antiga é encerrada depois de atingir o limite, por favor, note que os usuários podem perder todo o trabalho não salvo. Essa configuração não é compatível com (SSO) plugins de autenticação single sign-on.';
$string['locked'] = 'Bloqueado';
$string['md5'] = 'MD5 hash';
$string['nopasswordchange'] = 'Senha não pode ser mudada.';
$string['nopasswordchangeforced'] = 'Você não pode continuar sem mudar sua senha. Mas infelizmente não existe uma página para esse propósito.
Por favor contate o Administrador Moodle.';
$string['noprofileedit'] = 'Perfil não pode ser editado';
$string['ntlmsso_attempting'] = 'Tentando Single Sign On via NTLM...';
$string['ntlmsso_failed'] = 'O login automático falhou, tente pela página normal...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO está desativado.';
$string['passwordhandling'] = 'Gestão do campo Senha';
$string['plaintext'] = 'Texto simples';
$string['pluginnotenabled'] = 'Plugin de autenticação \'{$a}\' não está ativado.';
$string['pluginnotinstalled'] = 'Plugin de autenticação \'{$a}\' não está instalado.';
$string['potentialidps'] = 'Autenticar usando sua conta em:';
$string['recaptcha'] = 'reCAPTCHA';
$string['recaptcha_help'] = '<h2>Descrição</h2>
<p>CAPTCHA é um programa que verifica se seu usuário é um humano ou um computador. CAPTCHAs são usados por muitos sites na web para combater invasões de "bots" ou programas automáticos escritos para gerar spam. Nenhum programa de computador pode ler texto retorcido tão bem quanto as pessoas.</p>

<h2>Instruções</h2>
<p>Digite os caracteres que você vê desenhados na mesma ordem e separadas por um espaço branco. Fazendo isto você nos ajuda a evitar que programas mal intencionados prejudiquem o serviço.</p>

<p>Se você não tem certeza de quais são os caracteres siga o link "Obter outro CAPTCHA". </p>

<p>Usuários com deficiências visuais podem seguir o link "Obter um CAPTCHA em audio" para ouvir um conjunto de caracteres ao invés do desafio visual.</p>';
$string['recaptcha_link'] = 'auth/email';
$string['security_question'] = 'Pergunta de segurança';
$string['selfregistration'] = 'Auto-registro';
$string['selfregistration_help'] = 'Se um plugin de autenticação, como o auto-inscrição por e-mail, é selecionado, existe a possibilidade de potenciais usuários registrarem-se e criarem contas. Isto resulta na possibilidade de criação de contas por spammers para enviar mensagens a foruns, entradas em blogs, etc. Para evitar esse risco, a auto-inscrição deve ser desativada ou limitada pela configuração <em>Domínios de e-mail permitidos</em>.
';
$string['settingmigrationmismatch'] = 'Valores incompatíveis identificados ao corrigir os nomes de configuração do plugin. O plugin de autenticação \'{$a->plugin}\' tinha a configuração \'{$a->setting}\' definida para \'{$a->legacy}\' sob o nome herdado e \'{$a->current} para o nome atual. O último valor foi definido como o válido, mas você deve verificar e confirmar que é o esperado.';
$string['sha1'] = 'HAsh SHA-1';
$string['showguestlogin'] = 'Você pode esconder ou mostrar o botão de entrada para visitantes na página de ingresso.';
$string['stdchangepassword'] = 'Usar página padrão para mudança de senha';
$string['stdchangepassword_expl'] = 'Se o sistema de autenticação externa permitir mudanças de senha usando o Moodle, escolha SIM. Esta configuração ignora a \'URL para mudança de senha\'.';
$string['stdchangepassword_explldap'] = 'ATENÇÃO: É recomendável o uso de LDAP em um túnel cifrado SSL (ldaps://) se o servidor LDAP for remoto.';
$string['suspended'] = 'Conta suspensa';
$string['suspended_help'] = 'Usuários com contas suspensas não podem entrar ou usar serviços da web, e as mensagens enviadas são descartadas.';
$string['testsettings'] = 'Configurações de teste';
$string['testsettingsheading'] = 'Configurações de autenticação de teste - {$a}';
$string['unlocked'] = 'Desbloqueado';
$string['unlockedifempty'] = 'Desbloqueado se vazio';
$string['update_never'] = 'Nunca';
$string['update_oncreate'] = 'Quando for criado';
$string['update_onlogin'] = 'Em cada login';
$string['update_onupdate'] = 'Quando for atualizado';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate () não suporta o tipo de usuário (usertype) selecionado: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() não suporta o tipo de usuário (usertype) selecionado (.. até o momento)';
$string['username'] = 'Identificação de usuário';
$string['username_help'] = 'Lembre-se de que alguns plugins de autenticação não permitirão que você altere o nome de usuário.';

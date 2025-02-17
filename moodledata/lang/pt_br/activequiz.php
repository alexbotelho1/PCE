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
 * Strings for component 'activequiz', language 'pt_br', branch 'MOODLE_32_STABLE'
 *
 * @package   activequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activequiz:addinstance'] = 'Adicione uma instância ativa do questionário';
$string['activequiz:attempt'] = 'Tente um questionário ativo';
$string['activequiz:control'] = 'Controlar um questionário ativo. (Apenas para os instrutores)';
$string['activequiz:editquestions'] = 'Edite perguntas para um questionário ativo.';
$string['activequizintro'] = 'Introdução';
$string['activequiz:seeresponses'] = 'Veja outras respostas dos alunos para classificá-los';
$string['activequizsettings'] = 'Configurações Gerais do questionário ativo';
$string['activequiz:viewownattempts'] = 'Permite que os alunos visualizem suas próprias tentativas de um questionário';
$string['activitygrades'] = 'Tipos de atividade:';
$string['addquestion'] = 'Adicionar questão';
$string['addtoquiz'] = 'Adicionar';
$string['anonymousresponses'] = 'Tornar anônimas as respostas dos alunos';
$string['anonymousresponses_help'] = 'Tornar anônimas as respostas dos alunos para vista do instrutor de modo que se sua tela está sendo mostrada, nomes de estudante ou nomes de grupo não serão mostrados';
$string['assessed'] = 'Avaliadas';
$string['assessed_help'] = 'Marque esta caixa para que seu questionário seja avaliado';
$string['attempt_grade'] = 'Nota da tentativa';
$string['attemptno'] = 'Número de tentativas';
$string['attempts'] = 'Tentativas';
$string['attemptstarted'] = 'Uma tentativa já foi iniciada por você, por favor, clique abaixo para continuar a sua tentativa aberta';
$string['attemptstartedalready'] = 'Uma tentativa já foi iniciada por um dos membros do seu grupo';
$string['attemptview'] = 'Ver tentativa';
$string['cantaddquestiontwice'] = 'Você não pode adicionar a mesma pergunta mais de uma vez a um questionário';
$string['cantinitattempts'] = 'Você não pode inicializar tentativas';
$string['closesession'] = 'Fechar sessão';
$string['closingsession'] = 'Fechando sessão...';
$string['countdatasetlabel'] = 'Número de Respostas';
$string['defaultquestiontime'] = 'Tempo padrão para as questões';
$string['defaultquestiontime_help'] = 'O tempo padrão para exibir cada questão.<br />
Isso pode ser substituído por questões individuais.';
$string['edit'] = 'Editar questionário';
$string['editpage_opensession_error'] = 'Você não pode editar uma pergunta do quiz ou o layout enquanto uma sessão está aberta.';
$string['endquestion'] = 'Questão Final';
$string['eventattemptstarted'] = 'A tentativa começou';
$string['eventattemptviewed'] = 'Tentativa visualizada';
$string['eventquestionanswered'] = 'Questão respondida para tentativa';
$string['eventquestionmanuallygraded'] = 'Pergunta classificada manualmente';
$string['feedbackintro'] = 'Feedback para sua pergunta. Por favor aguarde o instrutor para começar a próxima pergunta';
$string['firstsession'] = 'Primeira sessão';
$string['gatheringresults'] = 'Coletando resultados...';
$string['gotosession'] = 'Ir para a sessão em andamento';
$string['grademethod'] = 'Método de classificação da sessão';
$string['grademethod_help'] = 'Este é o método usado quando há classificação . Este método descobre a classificação com várias sessões no mesmo questionário ativo.';
$string['gradesettings'] = 'Definições da Categoria';
$string['groupattendance'] = 'Permitir acompanhamento em grupo';
$string['groupattendance_help'] = 'Se esta opção estiver ativada, o estudante respondendo ao questionário pode selecionar quais os estudantes em seu grupo que estão participando.';
$string['grouping'] = 'Agrupamento';
$string['grouping_help'] = 'Selecione o grupo que você gostaria de usar para o agrupamento de estudantes';
$string['groupmembership'] = 'Participação em grupo';
$string['groupworksettings'] = 'Configurações do grupo';
$string['hide_correct_answer'] = 'Esconder resposta correta';
$string['hidenotresponded'] = 'Esconder não respondeu';
$string['hidestudentresponses'] = 'Ocultar respostas';
$string['highestsessiongrade'] = 'Nota mais alta da sessão';
$string['indvquestiontime'] = 'Tempo da questão';
$string['indvquestiontime_help'] = 'Tempo da questão em segundos.';
$string['instructorquizinst'] = '<p>Por favor espere nesta página até que estudantes tenham se conectado. Ao clicar <b>início teste</b> o teste se iniciará na primeira questão</p>
    <p>
<p>Controls:</p>
    <ul>
        <li>
            Re-contar questão
            <ul>
                <li>
                    Permite ao instrutor re-contar a questão atual ou anterior (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Próxima questão
            <ul>
                <li>
                   Continue na próxima questão (disponível durante revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Fim questão
            <ul>
                <li>
                    Fim da questão corrente. Também permite ao instrutor terminar antecipadamente uma questão com tempo determinado (disponível enquanto a questão está em execução). <i>se a questão não tem limite de tempo, será solicitado um clique ao instrutor <b>fim questão.</b></i>
                </li>
            </ul>
        </li>
        <li>
            Vai para questão
            <ul>
                <li>
                    Abre uma caixa de diálogo para direcionar todos usuários para uma questão específica no teste (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
          Fecha sessão
            <ul>
                <li>
                    Fecha a sessão corrente, bem como todas tentativas para os estudantes. Isso classifica automaticamente todas tentativas (disponível a qualquer momento).
                </li>
            </ul>
        </li>
        <li>
            Recarrega resultados
            <ul>
                <li>
                    Recarrega as respostas dos estudantes na caixa de informação. Permite ao instrutor ver quantos estudantes ou grupos responderam e quantos tem ainda que responder (disponível durante a revisão de uma questão).
                </li>
            </ul>
        </li>
        <li>
            Esconde/Exibe Não Respondido
            <ul>
                <li>
                    Esconde ou exibe a caixa de informação que exibe quantos estudantes ou grupos responderam e quais estudantes ou grupos ainda tem que responder (disponível quando a questão está em revisão).
                </li>
            </ul>
        </li>
        <li>
            Mostra resposta correta
            <ul>
                <li>
                    Dá ao instrutor a visão da questão com a resposta correta selecionada (disponível durante a revisão de uma questão). Isto não mostra a resposta correta  para tipos de questões avaliadas manualmente, como questões de múltipla escolha.
                </li>
            </ul>
        </li>
    </ul>
</p>';
$string['instructorsessionsgoing'] = 'Existe uma sessão em progresso. Por favor, clique no botão abaixo para ir para a sessão';
$string['invalidattemptaccess'] = 'Você não tem permissão para acessar essa tentativa';
$string['invalid_indvquestiontime'] = 'O tempo das perguntas deve ser um número inteiro maior ou igual a 0';
$string['invalid_numberoftries'] = 'Número de tentativas deve ser um número inteiro maior ou igual a 1';
$string['invalid_points'] = 'Os pontos são obrigatórios e devem ser um número maior do que 0';
$string['invalidquestionattempt'] = 'Pergunta Inválida ($a->questionname) sendo adicionada a tentativa do questionário.';
$string['joinquiz'] = 'Junte-se ao questionário';
$string['joinquizinstructions'] = 'Clique abaixo para juntar-se ao questionário';
$string['jumptoquesetioninstructions'] = 'Selecione uma pergunta que você gostaria de ir:';
$string['jumptoquestion'] = 'Ir para a pergunta:';
$string['lastsession'] = 'Última sessão';
$string['loading'] = 'Inicializar Questionário';
$string['manualcomment'] = 'Comentário Manual';
$string['manualcomment_help'] = 'O comentário que os instrutores podem adicionar quando uma tentativa for classificada';
$string['marks'] = 'Notas';
$string['marks_help'] = 'A nota numérica para cada questão é a pontuação total da tentativa';
$string['modulename'] = 'Questionário ativo';
$string['modulename_help'] = 'Equipe<p>A atividade Questionário Ativo permite ao instrutor criar e administrar questionários em tempo real. Todas as questões regulares dos questionários podem ser usadas no Questionário Ativo.</p>
<p>Questionário Ativo permite a participação de indivíduos ou grupos. Participação de grupos é possível pois os pontos dados durante o questionário ativo serão aplicados somente aos participantes que responderam à sessão. Questões podem ser configuradas para permitir respostas múltiplas. Um limite de tempo pode ser configurado para encerrar automaticamente uma questão, ou o instrutor pode terminar a questão manualmente e seguir para a próxima. O instrutor também tem a alternativa de saltar para questões diferentes enquanto executando a sessão. Instrutores podem monitorar a participação de grupos ou indivíduos, resposta dos participantes em tempo real e a questão sendo avaliada. <p>
<p>Cada resposta do questionário é marcada automaticamente como questionário regular (com a exceção de questões de múltipla escolha) e a avaliação é registrada num livro de avaliação. Avaliação para participação de grupos podem ser feitas automaticamente transferindo a avaliação de um indivíduo para os outros membros do grupo. <p>
<p>O instrutor tem opções para mostrar sugestões, dar retorno e mostram respostas corretas para estudantes mediante a conclusão do questionário.</p>
<p>Questionários Ativos podem ser usados como veículo para encaminhar Aprendizado em Time dentro do Moodle.</p>';
$string['modulenameplural'] = 'Questionários ativos';
$string['nextquestion'] = 'Próxima questão';
$string['nochangegroups'] = 'Você não pode mudar de grupo após a criação de sessões ou não há grupos definidos para este curso.';
$string['nochangegroups_label'] = '&nbsp;';
$string['nofeedback'] = 'Não há feedback para esta questão';
$string['no_questions'] = 'Não há nenhuma pergunta adicionada a este questionário.';
$string['nosession'] = 'Não há sessão aberta';
$string['notime'] = 'Sem limite de tempo';
$string['notresponded'] = 'Número de tentativas não respondidas';
$string['numberoftries'] = 'Número de tentativas';
$string['numberoftries_help'] = 'Número de tentativas em uma pergunta para um usuário. Os alunos ainda estarão vinculados ao prazo da pergunta.';
$string['overallgrade'] = 'Nota geral: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentagem de respostas dadas';
$string['pluginadministration'] = 'Administração questionário ativo';
$string['pluginname'] = 'Questionário ativo';
$string['points'] = 'Pontos das questões';
$string['points_help'] = 'O número de pontos que você gostaria que essa questão valesse para valer a pena';
$string['qdeleteerror'] = 'Não foi possível excluir questão';
$string['qdeletesucess'] = 'Questão excluída com sucesso';
$string['qmoveerror'] = 'Não foi possível mover questão';
$string['qmovesuccess'] = 'Questão movida com sucesso';
$string['question'] = 'Questão';
$string['questiondelete'] = 'Excluir questão {$a}';
$string['questionedit'] = 'Editar questão';
$string['questionfinished'] = 'Questão finalizada, à espera de resultados';
$string['questionlist'] = 'Lista de Questões';
$string['questionmovedown'] = 'Mover questão {$a} para baixo';
$string['questionmoveup'] = 'Mover questão {$a} para cima';
$string['quiznotrunning'] = 'Questionário não funcionando no momento - espere o seu professor para iniciá-lo. Use o botão de recarga para recarregar esta página para verificar novamente';
$string['reload_results'] = 'Atualizar Resultados';
$string['response_attempt_controls'] = 'Editar / Ver Tentativa';
$string['responses'] = 'Veja as respostas';
$string['reviewafter'] = 'Após as sessões serem fechadas';
$string['reviewoptionsettings'] = 'Opções de revisão';
$string['savequestion'] = 'Salvar questão';
$string['scale'] = 'Nota Máxima';
$string['scale_help'] = 'Este valor (inteiro) irá dimensionar quaisquer pontos que são recebidos no questionário para este valor.';
$string['select_group'] = 'Selecione seu grupo';
$string['selectsession'] = 'Selecione sessão para ver:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Média da Sessão';
$string['sessionclosed'] = 'Sessão está encerrada';
$string['sessionname'] = 'Nome da sessão';
$string['sessionname_required'] = 'O nome da sessão é necessário';
$string['sessionnametext'] = '<span style="font-weight: bold">Sessão: </span>';
$string['show_correct_answer'] = 'Mostrar resposta correta';
$string['showhistoryduringquiz'] = 'Mostrar histórico de respostas';
$string['showhistoryduringquiz_help'] = '';
$string['shownotresponded'] = 'Mostrar não respondeu';
$string['showstudentresponses'] = 'Mostrar respostas';
$string['startedon'] = 'Iniciado em';
$string['startquiz'] = 'Início do questionário';
$string['start_session'] = 'Início da Sessão';
$string['studentquizinst'] = '<p> Por favor, aguarde o instrutor para iniciar o questionário. Uma vez iniciado, você verá um cronômetro em contagem regressiva quando a primeira pergunta começar </p>';
$string['teacherjoinquizinstruct'] = '';
$string['theattempt'] = 'A tentativa';
$string['theattempt_help'] = 'Se o aluno pode rever a tentativa inteira.';
$string['timecompleted'] = 'Tempo concluído';
$string['timemodified'] = 'Tempo modificado';
$string['timertext'] = 'Sua questão irá acabar e será entregue automaticamente em:';
$string['trycount'] = 'Você tem {$a->tries} tentativas restantes.';
$string['unabletocreate_session'] = 'Não é possível criar sessão';
$string['view'] = 'Ver questionário';
$string['viewstats'] = 'Ver estatísticas do questionário';
$string['waitforquestion'] = 'Aguardando o envio da questão em:';
$string['waitforquestiontime'] = 'Aguarde o tempo das questões';
$string['waitforquestiontime_help'] = 'O tempo de espera para uma pergunta se iniciar / conduzir no tempo.';
$string['waitforrevewingend'] = 'O instrutor está atualmente revendo a questão anterior. Por favor, aguarde para a próxima questão começar';
$string['waitstudent'] = 'Esperando estudantes para se conectar';
$string['workedingroups'] = 'Trabalhará em grupos.';
$string['workedingroups_help'] = 'Marque esta caixa para indicar que os alunos irão trabalhar em grupos. Certifique-se de selecionar um agrupamento abaixo';

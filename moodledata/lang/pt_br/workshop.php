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
 * Strings for component 'workshop', language 'pt_br', branch 'MOODLE_33_STABLE'
 *
 * @package   workshop
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Notas re-calculadas';
$string['aggregation'] = 'Agregação de notas';
$string['allocate'] = 'Alocar envios';
$string['allocatedetails'] = 'esperado: {$a->expected}<br />enviado: {$a->submitted}<br /> alocado para: {$a->allocate}';
$string['allocation'] = 'Alocação de envio';
$string['allocationconfigured'] = 'Alocação configurada';
$string['allocationdone'] = 'Alocação concluída';
$string['allocationerror'] = 'Erro de alocação';
$string['allowedfiletypesforoverallfeedback_link'] = 'admin/tool/filetypes/index';
$string['allowedfiletypesforsubmission_link'] = 'admin/tool/filetypes/index';
$string['allsubmissions'] = 'Todos os envios ({$a})';
$string['alreadygraded'] = 'Já foi avaliada';
$string['areaconclusion'] = 'Texto de conclusão';
$string['areainstructauthors'] = 'Instruções para envio';
$string['areainstructreviewers'] = 'Instruções para avaliação';
$string['areaoverallfeedbackattachment'] = 'Anexos geral de feedback';
$string['areaoverallfeedbackcontent'] = 'Textos gerais de feedback';
$string['areasubmissionattachment'] = 'Anexos do envio';
$string['areasubmissioncontent'] = 'Textos enviados';
$string['assess'] = 'Avaliar';
$string['assessedexample'] = 'Exemplo enviado avaliado';
$string['assessedsubmission'] = 'Envio avaliado';
$string['assessingexample'] = 'Avaliação de exemplo enviado';
$string['assessingsubmission'] = 'Avaliação de envio';
$string['assessment'] = 'Avaliação';
$string['assessmentby'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['assessmentbyfullname'] = 'Avaliação por {$a}';
$string['assessmentbyyourself'] = 'Sua avaliação';
$string['assessmentdeleted'] = 'Avaliação desalocada';
$string['assessmentend'] = 'Prazo da avaliação';
$string['assessmentendbeforestart'] = 'Data final para avaliação não pode ser especificado antes da abertura para avaliação';
$string['assessmentenddatetime'] = 'Prazo da avaliação: {$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a}(data final para avaliação)';
$string['assessmentform'] = 'Formulário de avaliação';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Avaliação</a> de <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Avaliação de referência';
$string['assessmentreferenceconflict'] = 'Não é possível avaliar um envio de exemplo para o qual você proveu uma referência de avaliação.';
$string['assessmentreferenceneeded'] = 'Você precisa avaliar esse envio de exemplo para fornecer uma referência de avaliação. Clique \'Continuar\' para avaliar o envio.';
$string['assessmentsettings'] = 'Configurações da avaliação';
$string['assessmentstart'] = 'Aberto a partir de';
$string['assessmentstartdatetime'] = 'Aberto para avaliação de {$a->daydatetime} ({$a->distanceday})';
$string['assessmentstartevent'] = '{$a} (abre para a avaliação)';
$string['assessmentweight'] = 'Peso da avaliação';
$string['assignedassessments'] = 'Tarefas designadas para avaliar';
$string['assignedassessmentsnone'] = 'Você não tem nenhuma apresentação designado para avaliar';
$string['backtoeditform'] = 'Voltar para formulário de edição';
$string['byfullname'] = 'por <a href="{$a->url}">{$a->name}</a>';
$string['calculategradinggrades'] = 'Calcular notas de avaliação';
$string['calculategradinggradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Calcular notas de envios';
$string['calculatesubmissiongradesdetails'] = 'esperado: {$a->expected}<br />calculado: {$a->calculated}';
$string['chooseuser'] = 'Escolher usuário...';
$string['clearaggregatedgrades'] = 'Limpar todas as notas agregadas';
$string['clearaggregatedgradesconfirm'] = 'Tem certeza que deseja limpar as notas calculadas para a apresentação e as notas de avaliação?';
$string['clearaggregatedgrades_help'] = 'As notas agregados para a apresentação e notas de avaliação será zerado. Você pode voltar a calcular estas classes a partir do zero em fase de avaliação de classificação novamente.';
$string['clearassessments'] = 'Limpar avaliações';
$string['clearassessmentsconfirm'] = 'Tem certeza de que deseja apagar todos os graus de avaliação? Você não será capaz de obter as informações de volta em seu próprio país, os revisores terão de reavaliar os argumentos atribuídos.';
$string['clearassessments_help'] = 'As notas calculadas para a apresentação e notas de avaliação será zerado. As informações como as formas de avaliação são preenchidas ainda é mantida, mas a todos os revisores devem abrir o formulário de avaliação novamente e voltar a guardá-lo para obter as notas dadas calculado novamente.';
$string['conclusion'] = 'Conclusão';
$string['conclusion_help'] = 'Conclusão é um texto apresentado aos participantes no final da atividade. Você pode querer fornecer um total de feedback resumo, ou sugestões sobre o que deve ser feito em seguida (por exemplo, escrever um post de blog que reflete a nova experiência).';
$string['configexamplesmode'] = 'O modo padrão de avaliação de exemplos de oficinas';
$string['configgrade'] = 'Grau máximo padrão para apresentação em seminários';
$string['configgradedecimals'] = 'Número padrão de dígitos que devem ser mostrados após o ponto decimal ao exibir notas.';
$string['configgradinggrade'] = 'Grau máximo padrão para a avaliação em oficinas';
$string['configmaxbytes'] = 'Padrão máximo de tamanho de arquivo apresentação para todos os workshops no site (sujeito a limites de cursos e outras configurações locais)';
$string['configstrategy'] = 'Estratégia padrão de classificação para as oficinas';
$string['createsubmission'] = 'Começar a preparar seu envio';
$string['daysago'] = '{$a} dias atrás';
$string['daysleft'] = '{$a} dias passados';
$string['daystoday'] = 'hoje';
$string['daystomorrow'] = 'amanhã';
$string['daysyesterday'] = 'ontem';
$string['deadlinesignored'] = 'As restrições de tempo não se aplicam a você';
$string['editassessmentform'] = 'Editar formuário de avaliação';
$string['editassessmentformstrategy'] = 'Editar formuário de avaliação ({$a})';
$string['editingassessmentform'] = 'Editando formulário de avaliação';
$string['editingsubmission'] = 'Ediçao de tarefa enviada';
$string['editsubmission'] = 'Editar tarefa enviada';
$string['err_multiplesubmissions'] = 'Ao editar esta forma, uma outra versão da apresentação foi salva. Submissões múltiplas por usuário não são permitidos.';
$string['err_removegrademappings'] = 'Não foi possível remover os mapeamentos grau não utilizados';
$string['evaluategradeswait'] = 'Por favor, aguarde até que as avaliações são avaliados e as notas são calculadas';
$string['evaluation'] = 'Avaliação de classificação';
$string['evaluationmethod'] = 'Método de avaliação de classificação';
$string['evaluationmethod_help'] = 'O método de avaliação de classificação determina como o grau de avaliação é calculado. Você pode deixá-lo voltar a calcular os graus várias vezes com diferentes configurações, a menos que você esteja feliz com o resultado.';
$string['evaluationsettings'] = 'Configuração da avaliação';
$string['eventassessableuploaded'] = 'Um envio foi';
$string['eventassessmentevaluated'] = 'Envio avaliado';
$string['eventassessmentevaluationsreset'] = 'Avaliação de envio reconfigurada';
$string['eventassessmentreevaluated'] = 'Envio reavaliado';
$string['eventphaseswitched'] = 'Fase alterada';
$string['eventsubmissionassessed'] = 'Envio avaliado';
$string['eventsubmissionassessmentsreset'] = 'Avaliações de submissão apuradas';
$string['eventsubmissioncreated'] = 'Envio criado';
$string['eventsubmissionreassessed'] = 'Apresentação reavaliada';
$string['eventsubmissionupdated'] = 'Envio atualizado';
$string['eventsubmissionviewed'] = 'Envio visualizado';
$string['example'] = 'Exemplos de tarefa enviada';
$string['exampleadd'] = 'Adicionar exemplo de tarefa enviada';
$string['exampleassess'] = 'Avaliar exemplo de tarefa enviada';
$string['exampleassessments'] = 'Exemplos de tarefas enviadas para avaliar';
$string['exampleassesstask'] = 'Avaliar exemplos';
$string['exampleassesstaskdetails'] = 'esperado: {$a->expected} <br /> avaliados: {$a->assessed}';
$string['examplecomparing'] = 'Comparação de avaliações de exemplos de tarefas enviadas';
$string['exampledelete'] = 'Excluir example';
$string['exampledeleteconfirm'] = 'Tem certeza de que deseja excluir a submissão exemplo a seguir? Clique em &quot;Continuar&quot; botão para excluir a submissão.';
$string['exampleedit'] = 'Editar exemplos';
$string['exampleediting'] = 'Edição de exemplos';
$string['exampleneedassessed'] = 'Você tem que avaliar todos os exemplos tarefas enviadas primeiro';
$string['exampleneedsubmission'] = 'Você tem que enviar seu trabalho e avaliar todos os exemplos de tarefas enviadas primeiro';
$string['examplesbeforeassessment'] = 'Exemplos estão disponíveis depois de seu próprio envio e devem ser avaliados antes ';
$string['examplesbeforesubmission'] = 'Exemplo devem ser avaliados antes de seu próprio envio';
$string['examplesmode'] = 'Modo de avaliação de exemplos';
$string['examplesubmissions'] = 'Exemplos de tarefas enviadas';
$string['examplesvoluntary'] = 'Avaliação de exemplo de tarefa enviada é voluntária';
$string['feedbackauthor'] = 'Retorno para o autor';
$string['feedbackauthorattachment'] = 'Anexo';
$string['feedbackby'] = 'Comentários por {$a}';
$string['feedbackreviewer'] = 'Retorno para o crítico';
$string['feedbacksettings'] = 'Feedback';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Notas dadas';
$string['gradecalculated'] = 'Nota calculada para envio';
$string['gradedecimals'] = 'Casas decimais nas notas';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Nota: {$a->received} de {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (avaliação)';
$string['gradeitemsubmission'] = '{$a->workshopname} (envio)';
$string['gradeover'] = 'Sobrescrever nota para envio';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Relatório de notas do workshop';
$string['gradetopassgrading'] = 'Nota de avaliação para passar';
$string['gradetopasssubmission'] = 'Nota de submissão para passar';
$string['gradinggrade'] = 'Grade de Notas';
$string['gradinggradecalculated'] = 'Nota calculada para avaliação';
$string['gradinggrade_help'] = 'Esta configuração espeifica a nota máxima que pode ser obtida para uma avaliação de envio.';
$string['gradinggradeof'] = 'Nota para avaliação (de{$a})';
$string['gradinggradeover'] = 'Sobrescrever nota para avaliação';
$string['gradingsettings'] = 'Configurações de nota';
$string['groupnoallowed'] = 'Você não tem permissão para acessar qualquer grupo neste workshop';
$string['iamsure'] = 'Sim, eu tenha certeza';
$string['info'] = 'Informação';
$string['instructauthors'] = 'Instruções para envio';
$string['instructreviewers'] = 'Instruções para avaliação';
$string['introduction'] = 'Descrição';
$string['latesubmissions'] = 'Envios atrasados';
$string['latesubmissionsallowed'] = 'Envios atrasados são permitidos';
$string['latesubmissions_desc'] = 'Aceitar envios após o prazo estipulado';
$string['latesubmissions_help'] = 'Se ativado, um autor pode apresentar seu trabalho após o prazo de submissões ou durante a fase de avaliação. A apresentação tardia não pode ser editado no entanto.';
$string['maxbytes'] = 'Tamanho máximo do arquivo';
$string['modulename'] = 'Laboratório de Avaliação';
$string['modulename_help'] = 'O módulo de atividade oficina possibilita a avaliação de revisão, coleta e colegas de trabalho dos estudantes. Os estudantes podem enviar qualquer conteúdo digital (arquivos), como palavra-processados documentos ou planilhas e também pode digitar o texto diretamente em um campo usando o editor de texto. As inscrições são avaliados através de um formulário de avaliação multi-critérios definidos pelo professor. O processo de avaliação por pares e compreender a forma de avaliação pode ser praticado com antecedência, com apresentações de exemplo fornecidos pelo professor, juntamente com uma avaliação de referência. Os estudantes têm a oportunidade de avaliar um ou mais dos pedidos dos seus pares. As inscrições e revisores podem ser anônimas, se necessário. Estudantes obter duas notas em uma atividade de oficina - uma classe para a sua apresentação e uma nota para a avaliação das submissões dos seus pares. Ambas as séries são registrados no diário de classe.';
$string['modulename_link'] = 'mod/workshop/view';
$string['modulenameplural'] = 'Laboratórios de Avaliação';
$string['mysubmission'] = 'Meu envio';
$string['nattachments'] = 'Número máximo de anexos enviados';
$string['noexamples'] = 'Nenhum exemplo ainda neste workshop';
$string['noexamplesformready'] = 'Você deve definir o formulário de avaliação antes de prover os envios de exemplo';
$string['nogradeyet'] = 'Nenhuma nota ainda';
$string['nosubmissionfound'] = 'Nenhum envio encontrado para este usuário';
$string['nosubmissions'] = 'Nenhum envio neste workshop';
$string['notassessed'] = 'Nada avaliado ainda';
$string['nothingfound'] = 'Nada para ser mostrado';
$string['nothingtoreview'] = 'Nada para o crítico';
$string['notoverridden'] = 'Não sobrescrito';
$string['noworkshops'] = 'Não existem workshops neste curso';
$string['noyoursubmission'] = 'Você não enviou seu trabalho ainda';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Feedback global';
$string['overallfeedbackfiles'] = 'Número máximo de anexos gerais de feedback';
$string['overallfeedbackmaxbytes'] = 'Tamanho máximo do arquivo';
$string['overallfeedbackmode'] = 'Modo geral de feedback';
$string['overallfeedbackmode_0'] = 'Desabilitado';
$string['overallfeedbackmode_1'] = 'Ativado e opcionais';
$string['overallfeedbackmode_2'] = 'Ativado e necessário';
$string['overallfeedbackmode_help'] = 'Se ativado, um campo de texto é exibida na parte inferior do formulário de avaliação. Os revisores podem colocar a avaliação global da submissão lá, ou fornecer uma explicação adicional da sua avaliação.';
$string['page-mod-workshop-x'] = 'Qualquer página módulo de oficina';
$string['participant'] = 'Participante';
$string['participantrevierof'] = 'Participante é crítico de';
$string['participantreviewedby'] = 'Participante é criticado por';
$string['phaseassessment'] = 'Fase de avaliação';
$string['phaseclosed'] = 'Encerrado';
$string['phaseevaluation'] = 'Fase de avaliação de classificação';
$string['phasesetup'] = 'Configurar fase';
$string['phasesoverlap'] = 'A fase de apresentação e a fase de avaliação não podem se sobrepor';
$string['phasesubmission'] = 'Fase de envio';
$string['pluginadministration'] = 'Adminstração do workshop';
$string['pluginname'] = 'Laboratório de Avaliação';
$string['prepareexamples'] = 'Preparar exemplos de envios';
$string['previewassessmentform'] = 'Pré-visualizar';
$string['publishedsubmissions'] = 'Documentos enviados publicados';
$string['publishsubmission'] = 'Publicar documentos enviados';
$string['publishsubmission_help'] = 'Envios publicados são disponíves a outros quando o workshop for fechado.';
$string['reassess'] = 'Reavaliar';
$string['receivedgrades'] = 'Notas recebidas';
$string['recentassessments'] = 'Avaliações do workshop:';
$string['recentsubmissions'] = 'Tarefas enviadas do workshop:';
$string['resetassessments'] = 'Apagar todas as avaliações';
$string['resetassessments_help'] = 'Você pode optar por excluir apenas as avaliações atribuídas sem afetar submissões. Se submissões devem ser excluídos, suas avaliações serão excluídos implícita e esta opção é ignorada. Observe isso também inclui avaliações de exemplo submissões.';
$string['resetphase'] = 'Mudar para a fase de configuração';
$string['resetphase_help'] = 'Se ativado, todas as oficinas serão colocados para a fase de instalação inicial.';
$string['resetsubmissions'] = 'Apagar todos os envios';
$string['resetsubmissions_help'] = 'Todos os envios e suas avaliações serão excluídos. Isso não afeta envios de exemplo.';
$string['saveandclose'] = 'Salvar e fechar';
$string['saveandcontinue'] = 'Salvar e continuar edição';
$string['saveandpreview'] = 'Salvar e pré-visualizar';
$string['saveandshownext'] = 'Salvar e exibir o próximo';
$string['search:activity'] = 'Atividades do workshop';
$string['selfassessmentdisabled'] = 'Auto-avaliação desativada';
$string['showingperpage'] = 'Mostrando {$a} itens por página';
$string['showingperpagechange'] = 'Modificar ...';
$string['someuserswosubmission'] = 'Existe pelo menos um autor que ainda não enviou seu trabalho';
$string['sortasc'] = 'Ordenação crescente';
$string['sortdesc'] = 'Ordenação decrescente';
$string['strategy'] = 'Estratégia de classificação';
$string['strategyhaschanged'] = 'A estratégia de classificação oficina mudou desde que o formulário foi aberto para edição.';
$string['strategy_help'] = 'A estratégia de classificação determina a forma de avaliação utilizado e do método de classificação de envios. Há 4 opções:

* Classificação acumulativa - Comentários e uma nota são dados de acordo com aspectos específicos
* Comentários - Comentários são feitos levando em conta aspectos específicos, mas nenhuma nota pode ser dada
* Número de erros - Comentários e uma avaliação de sim/não são dados de acordo com afirmações específicas
* Rubrica - Uma avaliação de nível é dada de acordo com critérios específicos';
$string['submission'] = 'Envio';
$string['submissionattachment'] = 'Anexo';
$string['submissionby'] = 'Envio por {$a}';
$string['submissioncontent'] = 'Conteúdo enviado';
$string['submissiondeleteconfirm'] = 'Você tem certeza de que deseja deletar o envio a seguir?';
$string['submissiondeleteconfirmassess'] = 'Você tem certeza de que deseja deletar o envio a seguir? Note que isso também deletará {$a->count} avaliações associadas com esse envio, que poderá afetar as notas dos avaliadores.';
$string['submissionend'] = 'Prazo dos envios';
$string['submissionendbeforestart'] = 'Prazo de inscrições não podem ser especificados antes da abertura para a data submissões';
$string['submissionenddatetime'] = 'Prazo dos envios: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (Prazo de envio)';
$string['submissionendswitch'] = 'Passe para a próxima fase após o fim do período de submissões';
$string['submissionendswitch_help'] = 'Se o prazo de envios é especificado e esta opção estiver marcada, o workshop mudará automaticamente para a fase de avaliação após o prazo de envios.

Se você ativar esse recurso, é recomendável configurar o método de alocação programada, também. Se os envios não são alocados, nenhuma avaliação pode ser feita, mesmo se o workshop em si estiver em fase de avaliação.';
$string['submissiongrade'] = 'Nota para envio';
$string['submissiongrade_help'] = 'Esta configuração especifica a nota máxima que pode ser obtida pelos trabalhos enviados.';
$string['submissiongradeof'] = 'Notar para envio (de{$a})';
$string['submissionlastmodified'] = 'Última alteração';
$string['submissionsettings'] = 'Configurações de envio';
$string['submissionsreport'] = 'Relatório de envios do workshop';
$string['submissionstart'] = 'Início dos envios';
$string['submissionstartdatetime'] = 'Aberto para submissões de
{$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (abre para envios)';
$string['submissiontitle'] = 'Título';
$string['submittednotsubmitted'] = 'Enviado ({$a->submitted}) / não enviado ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Método de alocação de envios';
$string['subplugintype_workshopallocation_plural'] = 'Métodos de alocação de envios';
$string['subplugintype_workshopeval'] = 'Método de avaliação de classificação';
$string['subplugintype_workshopeval_plural'] = 'Métodos de avaliação de classificação';
$string['subplugintype_workshopform'] = 'Estratégia de classificação';
$string['subplugintype_workshopform_plural'] = 'Estratégias de classificação';
$string['switchingphase'] = 'Mudando a fase';
$string['switchphase'] = 'Mudar fase';
$string['switchphase10info'] = 'Você está prestes a mudar o workshop para <strong>Fase de preparação</strong>. Nessa fase, os usuários não podem modificar os seus envios ou as suas avaliações. Os professores podem utilizar essa fase para alterar as configurações do workshop, alterar a estratégia de classificação ou ajustar formulários de avaliação.';
$string['switchphase20info'] = 'Você está prestes a mudar o workshop para a  <strong>Fase de envio</strong>. Os estudantes podem enviar os seus trabalhos durante essa fase (dentro das datas de controle de acesso ao envio, se definidas). Os professores podem alocar envios para revisão por colegas.';
$string['switchphase30auto'] = 'O workshop mudará automaticamente para a fase de avaliação após {$a->daydatetime} ({$a->distanceday})';
$string['switchphase30info'] = 'Você está prestes a mudar o workshop para a <strong>Fase de avaliação</strong>. Nessa fase, os avaliadores podem analisar os envios que lhes foram atribuídos (dentro das datas de controle de acesso de avaliação, se definidas).';
$string['switchphase40info'] = 'Você está prestes a mudar o workshop para a <strong>Fase de avaliação da classificação </strong>. Nessa fase, os usuários não podem modificar os seus envios ou as suas avaliações. Os professores podem utilizar as ferramentas de avaliação de classificação para calcular as notas finais e fornecer feedback aos avaliadores.';
$string['switchphase50info'] = 'Você está prestes a encerrar o workshop. Isso resultará no cálculo das notas que aparecem no livro de notas. Os estudantes podem ver as suas avaliações de envios.';
$string['taskassesspeers'] = 'Avaliar colegas';
$string['taskassesspeersdetails'] = 'total: {$a->total}<br />pendente: {$a->todo}';
$string['taskassessself'] = 'Avaliar você mesmo';
$string['taskconclusion'] = 'Forneça uma conclusão da atividade';
$string['taskinstructauthors'] = 'Forneça instruções para envio';
$string['taskinstructreviewers'] = 'Forneça instruções para avaliação';
$string['taskintro'] = 'Defina a descrição do workshop';
$string['tasksubmit'] = 'Envie seu trabalho';
$string['toolbox'] = 'Barra de ferramentas do workshop';
$string['undersetup'] = 'O workshop atualmente está sendo configurado. Por favor, espere até que ele mude para a próxima fase.';
$string['useexamples'] = 'Usar exemplos';
$string['useexamples_desc'] = 'Envios de exemplo são fornecidos para a prática na avaliação';
$string['useexamples_help'] = 'Se habilitado, os usuários podem tentar avaliar um ou mais envios de exemplo e comparar as suas avaliações com uma avaliação de referência. A nota não é computada na nota para avaliação.';
$string['usepeerassessment'] = 'Usar avaliação de colega';
$string['usepeerassessment_desc'] = 'Estudantes podem avaliar o trabalho dos outros';
$string['usepeerassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar envios de outros usuários e receberá uma nota como avaliador, além da nota para seu próprio envio.';
$string['userdatecreated'] = 'enviado em <span>{$a}</span>';
$string['userdatemodified'] = 'modificado em <span>{$a}</span>';
$string['userplan'] = 'Planejador do workshop';
$string['userplan_help'] = 'O planejador do workshop exibe todas as fases da atividade e lista as tarefas para cada fase. A fase atual é destacada e a conclusão da tarefa é indicada com um visto.';
$string['useselfassessment'] = 'Usar auto-avaliação';
$string['useselfassessment_desc'] = 'Estudantes podem avaliar seus próprios trabalhos';
$string['useselfassessment_help'] = 'Se habilitado, um usuário pode ser alocado para avaliar seu próprio envio e receberá uma nota como avaliador, além da nota para o seu próprio envio.';
$string['weightinfo'] = 'Peso: {$a}';
$string['withoutsubmission'] = 'Avaliador sem envio próprio';
$string['workshop:addinstance'] = 'Adicionar novo workshop';
$string['workshop:allocate'] = 'Alocar envios para avaliação';
$string['workshop:deletesubmissions'] = 'Deletar envios';
$string['workshop:editdimensions'] = 'Editar formuários de avaliação';
$string['workshop:ignoredeadlines'] = 'Ignorar restrições de tempo';
$string['workshop:manageexamples'] = 'Gerenciar envios de exemplo';
$string['workshopname'] = 'Nome do workshop';
$string['workshop:overridegrades'] = 'Sobrescrever as notas calculadas';
$string['workshop:peerassess'] = 'Avaliar colega';
$string['workshop:publishsubmissions'] = 'Publicar envios';
$string['workshop:submit'] = 'Enviar';
$string['workshop:switchphase'] = 'Mudar fase';
$string['workshop:view'] = 'Visualizar workshop';
$string['workshop:viewallassessments'] = 'Visualizar todas avaliações';
$string['workshop:viewallsubmissions'] = 'Visualizar todos envios';
$string['workshop:viewauthornames'] = 'Visualizar todos nomes de autores';
$string['workshop:viewauthorpublished'] = 'Visualizar autores de submissões publicadas';
$string['workshop:viewpublishedsubmissions'] = 'Visualizar todos os envios publicados';
$string['workshop:viewreviewernames'] = 'Visualizar todos nomes de críticos';
$string['yourassessment'] = 'A sua avaliação';
$string['yourgrades'] = 'Suas notas';
$string['yoursubmission'] = 'Seu envio';

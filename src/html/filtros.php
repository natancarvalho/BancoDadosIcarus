<?php
function filtroFornecedores(){
    $filtro = "<div class=\"row\">
        <div class=\"col-md-auto\">
            <form name=\"Tipos de Fornecedores\" action=\"consultar_fornecedores.php\" method=\"POST\">
                <div>
                    <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"tipo_fornecedor\">
                        <option value=\"Todos\"selected>Tipos de Fornecedores</option>
                        <option value=\"Material\">Materiais</option>
                        <option value=\"Serviços\">Serviços</option>
                        <option value=\"Todos\">Todos</option>
                    </select>
                </div>
        </div>

        <div class=\"col-md-auto\">
            <form name=\"Resposavel\" action=\"consultar_fornecedores.php\" method=\"POST\">
                <div>
                    <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"responsavel\">
                        <option selected>Responsável</option>
                        <option value=\"Fábio\">Fábio</option>
                        <option value=\"Mateus\">Mateus</option>
                        <option value=\"Rafael\">Rafael</option>
                    </select>
                </div>
        </div>

        <div class=\"col-md-auto\">  
            <form name=\"Situação Relacionamento\" action=\"consultar_fornecedores.php\" method=\"POST\">
                <div>
                    <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"situacao\">
                        <option selected>Situação do Relacionamento</option>
                        <option value=\"Contactado\">Contactado</option>
                        <option value=\"Não Contactado\">Não Contactado</option>
                        <option value=\"Contactado: há\">Possibilidade de Parceria</option>
                        <option value=\"Não há\">Sem Possibilidade de Parceria</option>
                    </select>
                </div>
        </div>
                <button class=\"btn btn-sm btn-icarus\">Buscar</button>
            </form>
    </div>";

    return $filtro;
}

function filtroAhmed (){
    $filtro = "<div class=\"row\">
    <div class=\"col-md-auto\">
        <form name=\"Geometria\" action=\"consultar_simulacoes_ahmed.php\" method=\"POST\">
            <div>
                <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"geometria\">   
                    <option value=\"Geometria\"selected>Geometria</option>
                    <option value=\"Dominio\">Domínio fluido (mm)</option>
                    <option value=\"Influencia1\">Influência 1 - carbox 1 (mm)</option>
                    <option value=\"Influencia2\">Influência 2 - carbox 2(ou wakebox) (mm)</option>
                    <option value=\"Influencia3\">Influência 3 - underbodybox (mm)</option>
                </select>
            </div>
    </div>

    <div class=\"col-md-auto\">
        <form name=\"Malha\" action=\"consultar_simulacoes_ahmed.php\" method=\"POST\">
            <div>
                <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"malha\">
                    <option selected>Malha</option>
                    <option value=\"MalhaGlobal\">Malha global</option>
                    <option value=\"Face1\">MateusFace sizing 1 - carro</option>
                    <option value=\"Face2\">Face sizing 2 - rodas</option>
                    <option value=\"Inflation1\">Inflation 1 - carro</option>
                    <option value=\"Inflation2\">Inflation 2 - solo</option>
                    <option value=\"Body1\">Body sizing 1 - carbox 1</option>
                    <option value=\"Body2\">Body sizing 2 - carbox 2</option>
                    <option value=\"Body3\">Body sizing 3 - underbodybox</option>
                    <option value=\"Qualidade\">Qualidade e estatísticas</option>                
                </select>
            </div>
    </div>

    <div class=\"col-md-auto\">  
        <form name=\"Solver e Resultados\" action=\"consultar_simulacoes_ahmed.php\" method=\"POST\">
            <div>
                <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"solver_resultados\">
                    <option selected>Solver e Resultados</option>
                    <option value=\"SetupFluent\">Setup do Fluent</option>
                    <option value=\"Solucao\">Solução</option>
                    <option value=\"Resultados\">Resultados</option>
                </select>
            </div>
        </div><br>
            <button class=\"btn btn-sm btn-icarus\">Buscar</button>
        </form>
    </div>";

    return $filtro;
}

function filtroCaracteristicasCarro (){
    $filtro = "
    <div class =\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-auto\">
                <form name=\"CaracteristicasCarro\" action=\"consultar_caracteristica_carro.php\" method=\"POST\">
                    <div>
                        <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"caracteristicasCarro\">   
                            <option value=\"CaracteristicasCarro\"selected>Caracteristicas do Carro</option>
                            <option value=\"Geometria\">Geometria de suspensão</option>
                            <option value=\"Rigidez\">Rigidez</option>
                        </select>
                    </div>
            </div>
            <button class=\"btn btn-sm btn-icarus\">Buscar</button>
            </form>
        </div>
    </div><br>";

    return $filtro;
}

function filtroAlterarCaracteristicasCarro(){
    $filtro = "
    <div class =\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-auto\">
                <form name=\"CaracteristicasCarro\" action=\"alterar_caracteristicas_carro.php\" method=\"POST\">
                    <div>
                        <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"caracteristicasCarro\">   
                            <option value=\"CaracteristicasCarro\"selected>Caracteristicas do Carro</option>
                            <option value=\"Geometria\">Geometria de suspensão</option>
                            <option value=\"Rigidez\">Rigidez</option>
                        </select>
                    </div>
            </div>
            <button class=\"btn btn-sm btn-icarus\">Buscar</button>
            </form>
        </div>
    </div><br>";

    return $filtro;
}

function botaoInserir (){
    $botao = "<div class=\"col col-xs-6 text-left\">
    <p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Insert\">
        <button class=\"btn btn-sm btn-icarus\" data-title=\"Inserir\" data-toggle=\"modal\" data-target=\"#insert\">Inserir Dados
        </button>
    </p>
  </div>";

  return $botao;
}

function filtroAlterarFornecedores(){
    $filtro = "<div class =\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-auto\">
                <form name=\"fornecedores\" action=\"alterar_fornecedores.php\" method=\"POST\">
                    <div>
                        <select class=\"btn btn-sm btn-icarus dropdown-toggle dropdown-toggle-split\" name=\"fornecedores\">   
                            <option value=\"fornecedores\"selected>Tipos de Fornecedores</option>
                            <option value=\"Material\">Materiais</option>
                            <option value=\"Serviços\">Serviços</option>
                        </select>
                    </div>
            </div>
            <button class=\"btn btn-sm btn-icarus\">Buscar</button>
            </form>
        </div>
    </div><br>";

    return $filtro;
}
?>
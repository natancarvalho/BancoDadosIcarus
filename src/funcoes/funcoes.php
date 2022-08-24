<?php
require "conectar.php";

/*class Funcoes {
    private $sql2;

    public function gerarCodigoSetup (string $Modelo_Carro): string{
        return $codigoSetup = "STSUS".$Modelo_Carro."02";
    }

    public function adicionar(string $empresa, string $telefone): void {
        $insereArtigo = $this->sql2->prepare('');
        $insereArtigo->bind_param('ss', $empresa, $telefone);
        $insereArtigo->execute();
    }
}*/

/*Função para gerar o html para exibir as tabelas*
 *Recebe como argumentos a string de conexão, a query SQL e o nome da tabela
 *Retorna o código HTML para exibir a tabela na página*/
function myTable($strcon2,$sql,$nome_tabela){
    $html = "";
    $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
    if(mysqli_num_rows($rsResult)>0)
    {
        //We start with header. >>>Here we retrieve the field names<<<
        $html .= "<div class=\"container-fluid\">
        <div class=\"table-responsive\" style=\"overflow: auto; height: 435px;\">
        <table class=\"table table-bordered table-sm overflow-auto\">
        <caption>".$nome_tabela."</caption>
        <thead class=\"thead-dark\">
        <tr>";
        $i = 0;
        while ($i < mysqli_num_fields($rsResult)){
           $field = mysqli_fetch_field_direct($rsResult, $i);
           $fieldName=$field->name;
           $html .= "<th scope=\"col\">$fieldName</th>";
           $i = $i +1;
        }
        $html .= " </tr>
               </thead>"; 
        //>>>Field names retrieved<<<

        //We dump info
        $bolWhite=true;
        while ($row = mysqli_fetch_assoc($rsResult)) {
            $html .= $bolWhite ? "<tr>" : "<tr>";
            $bolWhite=!$bolWhite;
            foreach($row as $data) {
                $html .= "<td>$data</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tr>";
        $html .= "</table>";
        $html .= "</div>";
        $html .= "</div>" ;

        return $html;
    }
}

/*Função para pegar o nome das colunas da tabela e montar em html*
 *Recebe como argumentos a string de conexão com o banco de dados
 *Retorna o nome das colunas para ser utilizada em outras funções*/
function get_col_names($strcon2, $nome_tabela){
    $nomes_colunas = "";
    $sql = "SELECT * FROM ".$nome_tabela;
    $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
    if(mysqli_num_rows($rsResult)>0)
    {
        //We start with header. >>>Here we retrieve the field names<<<
        $i = 1;
        while ($i < mysqli_num_fields($rsResult)){
            $field = mysqli_fetch_field_direct($rsResult, $i);
            $fieldName=$field->name;
            //echo ",tb_Fornecedor_Material.$fieldName\n";
            $nomes_colunas2 = ",".$nome_tabela.".".$fieldName."\n";
            $nomes_colunas .= $nomes_colunas2;
            //echo "OI -> $nomes_colunas2";
            $i = $i + 1;
        } return $nomes_colunas;
    } 
}
 
/*Função para gerar a query que vai imprimir a tabela em html*
 *Recebe como argumentos as strings contendo o nome das coluna gerada pela função acima,
 *as chaves das tabelas e os nomes das tabelas
 *Retorna a query SQL para exibir a tabela completa na página*/    
function makeQuery ($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas){
    //$nomes_colunas = get_col_names($strcon2);

    $select = "SELECT ".$nome_tabelaA.".*";
    $from = " FROM ".$nome_tabelaA.
    " INNER JOIN ".$nome_tabelaB. " ON ".$nome_tabelaA.".".$ChaveA."=".$nome_tabelaB.".".$ChaveB;

    $sql = $select.$nomes_colunas.$from;
    //echo $sql;
    return $sql;
}

/*Função para gerar a query para filtrar os dados das tabelas*
 *Recebe como argumentos as strings contendo o nome da coluna, o nome da tabela e*
 *o valor que será utilizado com filtro
 *Retorna a query SQL usada para exibir a tabela filtrada na página*/    
function queryFiltro ($tabela, $coluna, $valor){
    $select = "SELECT * FROM ".$tabela;
    $where = " WHERE ".$coluna." LIKE "."\"%$valor%\"" ;
    
    $sql = $select.$where;
    //echo $sql;
    return $sql;
}

/*Função para exibir as tabelas na página de inserção e alteração de dados 
 *com os botões inserir e excluir nas primeiras colunas
 *Recebe como argumentos a string de conexão com o banco de dados($strcon2), a consulta SQL($sql)
 *e o nome da tabela 
 *Retorna o código HTML para exibir a tabela na página*/
function editMyTable($strcon2,$sql,$nome_tabela){
    $html = "";
    $rsResult = mysqli_query($strcon2, $sql) or die(mysqli_error($strcon2));
    if(mysqli_num_rows($rsResult)>0)
    {
        //We start with header. >>>Here we retrieve the field names<<<
        $html .= "<div class=\"container-fluid\">
        <div class=\"table-responsive\" style=\"overflow: auto; height: 435px;\">
        <table class=\"table table-bordered table-sm overflow-auto\">
        <caption>".$nome_tabela."</caption>
        <thead class=\"thead-dark\">
        <tr>";
        $html .= "<th>Editar</th>
                  <th>Deletar</th>";
        $i = 0;
        while ($i < mysqli_num_fields($rsResult)){
           $field = mysqli_fetch_field_direct($rsResult, $i);
           $fieldName=$field->name;
           $html .= "<th scope=\"col\">$fieldName</th>";
           $i = $i +1;
        }
        $html .= " </tr>
               </thead>"; 
        //>>>Field names retrieved<<<

        //We dump info
        $bolWhite=true;
        while ($row = mysqli_fetch_assoc($rsResult)) {
            $html .= $bolWhite ? "<tr>" : "<tr>";
            $bolWhite=!$bolWhite;
            $html .= "<td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Edit\">
                        <button class=\"btn btn-primary btn-sm\" data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#edit\">
                        <span class=\"material-icons md-16\">edit</span></button>
                      </p></td>
                      <td><p data-placement=\"top\" data-toggle=\"tooltip\" title=\"Delete\">
                        <button class=\"btn btn-danger btn-sm\" data-title=\"Delete\" data-toggle=\"modal\" data-target=\"#delete\">
                        <span class=\"material-icons md-16\">delete</span></button>
                      </p></td>";
            foreach($row as $data) {
                $html .= "<td>$data</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</tr>";
        $html .= "</table>";
        $html .= "</div>";
        $html .= "</div>" ;

        return $html;
    }
}

/*Função apenas para testes, não é mais utilizada no código*/
function editarTabela(string $codigo, string $empresa, string $telefone){

    $sql = "UPDATE dados_treino_setup.tb_temperaturas SET Temp_Ambiente = '$empresa', Temp_Pista = '$telefone'
            WHERE (Cod_Temperaturas = '$codigo')";

    return $sql;
}

/*Função utilizada para exibir o head do HTML em todas as páginas que for necessário*/
function exibirHead (){
    echo "<link rel=\"icon\" href=\"../../images/cropped-cropped-Logo-escudo-32x32.png\" sizes=\"32x32\" />
        <link rel=\"icon\" href=\"../../images/cropped-cropped-Logo-escudo-192x192.png\" sizes=\"192x192\" />
        <link rel=\"apple-touch-icon\" href=\"../../images/cropped-cropped-Logo-escudo-180x180.png\" />
        <meta name=\"msapplication-TileImage\" content=\"../../images/cropped-cropped-Logo-escudo-270x270.png\" />
        <link rel=\"stylesheet\" href=\"../../css/bootstrap.min.css\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
        <script src=\"../../js/bootstrap.min.js\"></script>
        <link rel=\"stylesheet\" href=\"../../css/styles.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">      
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link href=\"../../css/styles.css\" rel=\"stylesheet\">";
}

/*Função para inserir temperaturas no banco de dados
 *Recebe como parametros as strings contendo o código das temperaturas, temperatura ambiente 
 *e temperatura da pista
 *Retorna a query SQL para execução da inserção no banco de dados*/
function inserirTemperatura(string $codigo, string $temp_ambiente, string $temp_pista){

    $sql = "INSERT INTO dados_treino_setup.tb_temperaturas (Cod_Temperaturas, Temp_Ambiente, Temp_Pista) 
    VALUES ('$codigo', '$temp_ambiente', '$temp_pista')";

    return $sql;
}

/*Função para inserir dados de setup de suspensão no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da inserção no banco de dados*/
function inserirSetupSusp(string $codigo, string $Modelo_Carro, string $Data_Treino, string $Massa_Com_Piloto, 
                          string $Rigidez_ARB, string $Ride_Rate_Diant, string $Ride_Rate_Tras, 
                          string $Kit_Aerodinamico, string $Camber, string $Toe){
                            
    $sql = "INSERT INTO dados_treino_setup.tb_setup_susp (Cod_Setup_Susp, Modelo_Carro, Data_Treino,
        	Massa_Com_Piloto, Rigidez_ARB, Ride_Rate_Diant,	Ride_Rate_Tras,	Kit_Aerodinamico, Camber, Toe) 
            VALUES ('$codigo', '$Modelo_Carro', '$Data_Treino', '$Massa_Com_Piloto', '$Rigidez_ARB', 
            '$Ride_Rate_Diant', '$Ride_Rate_Tras', '$Kit_Aerodinamico', '$Camber', '$Toe')";

    return $sql;

}

/*Função para alterar dados de setup de suspensão no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da alteração no banco de dados*/
function editarTabelaSetupSusp(string $codigo, string $Modelo_Carro, string $Data_Treino, string $Massa_Com_Piloto, 
                               string $Rigidez_ARB, string $Ride_Rate_Diant, string $Ride_Rate_Tras, 
                               string $Kit_Aerodinamico, string $Camber, string $Toe){

    $sql = "UPDATE dados_treino_setup.tb_setup_susp SET Modelo_Carro = '$Modelo_Carro', Data_Treino = '$Data_Treino', 
    Massa_Com_Piloto = '$Massa_Com_Piloto', Rigidez_ARB = '$Rigidez_ARB', Ride_Rate_Diant = '$Ride_Rate_Diant',	
    Ride_Rate_Tras = '$Ride_Rate_Tras',	Kit_Aerodinamico = '$Kit_Aerodinamico', Camber = '$Camber', 
    Toe = '$Toe' WHERE (Cod_Setup_Susp = '$codigo')";

    return $sql;

}

/*Função para gerar a query que faz uma junção da tabela de geometria de suspensão com a tabela de rigidez
 *para gerar a tabela de caracteristicas do carro 
 *Retorna a query SQL para exibir a tabela na página da aplicação*/
function queryCaracteristicasCarro ($strcon){
    $nomes_colunas = get_col_names($strcon,"tb_geo_susp");
    $nomes_colunas2 = get_col_names($strcon,"tb_rigidez");
    $nome_tabelaA = "tb_caracteristica_carro";
    $nome_tabelaB = "tb_geo_susp";
    $nome_tabelaC = "tb_rigidez";
    $ChaveA = "Cod_Geo_Susp";
    $ChaveB = "Cod_Rigidez";
   
   
    $select = "SELECT ".$nome_tabelaA.".*";
    $from = " FROM (".$nome_tabelaA;
    $join1 = " INNER JOIN ".$nome_tabelaB. " ON ".$nome_tabelaA.".".$ChaveA."=".$nome_tabelaB.".".$ChaveA.")";
    $join2 = " INNER JOIN ".$nome_tabelaC. " ON ".$nome_tabelaA.".".$ChaveB."=".$nome_tabelaC.".".$ChaveB;
   
    return $sql = $select.$nomes_colunas." ".$nomes_colunas2.$from.$join1.$join2;
}

/*Função para alterar dados de geometria de suspensão no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da alteração no banco de dados*/
function editarTabelaGeoSusp(string $Cod_Geo_Susp, string $Entre_Eixos, string $Altura_Roll_Axis, 
                             string $Steer_Axis_Inc_Diant, string $Steer_Axis_Inc_Tras, 
                             string $Scrub_Radius_Dianteiro, string $Scrub_Radius_Tras, string $Caster_Diant,
                             string $Caster_Tras, string $Alt_Estat_Diant, string $Alt_Estat_Tras, 
                             string $Dist_Long_CG_Diant	, string $Dist_Long_CG_Tras	, string $Mot_Ratio_Diant, 
                             string $Mot_Ratio_Tras, string $Alt_Roll_Center_Tras, string $Alt_Roll_Center_Diant,
                             string $Altura_CG, string $Distancia_CG_Roll_Axis, string $Bitola_Media, 
                             string $Bitola_Diant, string $Bitola_Tras){

    $sql = "UPDATE dados_treino_setup.tb_geo_susp SET  Entre_Eixos = '$Entre_Eixos', Altura_Roll_Axis = '$Altura_Roll_Axis', 
    Steer_Axis_Inc_Diant = '$Steer_Axis_Inc_Diant', Steer_Axis_Inc_Tras = '$Steer_Axis_Inc_Tras', 
    Scrub_Radius_Dianteiro = '$Scrub_Radius_Dianteiro', Scrub_Radius_Tras = '$Scrub_Radius_Tras', 
    Caster_Diant = '$Caster_Diant', Caster_Tras = '$Caster_Tras', Alt_Estat_Diant = '$Alt_Estat_Diant', 
    Alt_Estat_Tras = '$Alt_Estat_Tras', Dist_Long_CG_Diant = '$Dist_Long_CG_Diant', Dist_Long_CG_Tras = '$Dist_Long_CG_Tras', 
    Mot_Ratio_Diant = '$Mot_Ratio_Diant', Mot_Ratio_Tras = '$Mot_Ratio_Tras', Alt_Roll_Center_Tras = '$Alt_Roll_Center_Tras', 
    Alt_Roll_Center_Diant = '$Alt_Roll_Center_Diant', Altura_CG = '$Altura_CG', Distancia_CG_Roll_Axis = '$Distancia_CG_Roll_Axis', 
    Bitola_Media = '$Bitola_Media', Bitola_Diant = '$Bitola_Diant', Bitola_Tras = '$Bitola_Tras' 
    WHERE (Cod_Geo_Susp = '$Cod_Geo_Susp')";

    return $sql;
}

/*Função para inserir dados de geometria de suspensão no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da inserção no banco de dados*/
function inserirGeoSusp(string $Cod_Geo_Susp, string $Entre_Eixos, string $Altura_Roll_Axis, 
                        string $Steer_Axis_Inc_Diant, string $Steer_Axis_Inc_Tras, 
                        string $Scrub_Radius_Dianteiro, string $Scrub_Radius_Tras, string $Caster_Diant,
                        string $Caster_Tras, string $Alt_Estat_Diant, string $Alt_Estat_Tras, 
                        string $Dist_Long_CG_Diant	, string $Dist_Long_CG_Tras	, string $Mot_Ratio_Diant, 
                        string $Mot_Ratio_Tras, string $Alt_Roll_Center_Tras, string $Alt_Roll_Center_Diant,
                        string $Altura_CG, string $Distancia_CG_Roll_Axis, string $Bitola_Media, 
                        string $Bitola_Diant, string $Bitola_Tras){
                            
    $sql = "INSERT INTO dados_treino_setup.tb_geo_susp (Cod_Geo_Susp, Entre_Eixos, Altura_Roll_Axis, 
    Steer_Axis_Inc_Diant, Steer_Axis_Inc_Tras, Scrub_Radius_Dianteiro, Scrub_Radius_Tras, Caster_Diant, 
    Caster_Tras, Alt_Estat_Diant, Alt_Estat_Tras, Dist_Long_CG_Diant, Dist_Long_CG_Tras, Mot_Ratio_Diant, 
    Mot_Ratio_Tras, Alt_Roll_Center_Tras, Alt_Roll_Center_Diant, Altura_CG, Distancia_CG_Roll_Axis, 
    Bitola_Media, Bitola_Diant, Bitola_Tras) 
    VALUES ('$Cod_Geo_Susp', '$Entre_Eixos', '$Altura_Roll_Axis', '$Steer_Axis_Inc_Diant', 
    '$Steer_Axis_Inc_Tras', '$Scrub_Radius_Dianteiro', '$Scrub_Radius_Tras', '$Caster_Diant',
    '$Caster_Tras', '$Alt_Estat_Diant', '$Alt_Estat_Tras', '$Dist_Long_CG_Diant', '$Dist_Long_CG_Tras',
    '$Mot_Ratio_Diant', '$Mot_Ratio_Tras', '$Alt_Roll_Center_Tras', '$Alt_Roll_Center_Diant', '$Altura_CG',
    '$Distancia_CG_Roll_Axis', '$Bitola_Media', '$Bitola_Diant', '$Bitola_Tras')";

    return $sql;
}

/*Função para gerar a query que faz uma junção da tabela de fornecedores de materiais com a tabela 
 *de fornecedores de servições para gerar a tabela completa de fornecedores 
 *Retorna a query SQL para exibir a tabela na página da aplicação*/
function queryFornecedoresMateriais ($strcon2){
    $nome_tabelaA = "tb_Fornecedores";
    $nome_tabelaB = "tb_Fornecedor_Material";
    $ChaveA = "Codigo";
    $ChaveB = "Codigo";
   
    $nomes_colunas = get_col_names($strcon2,"tb_Fornecedor_Material");
   
    $sql = makeQuery($nome_tabelaA, $nome_tabelaB, $ChaveA, $ChaveB, $nomes_colunas);

    return $sql;
}

/*Função para alterar dados de fornecedores de serviços no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da alteração no banco de dados*/
function editarFornecedoresServicos (string $Codigo, string $Empresa, string $Email, string $Situacao_Relacionamento, string $Comentarios, 
                                     string $Comentarios2, string $Responsavel, string $Tipo_Fornecedor){

    $sql = "UPDATE dados_estrutural.tb_Fornecedores SET Empresa = '$Empresa', 
    Email = '$Email', Situacao_Relacionamento = '$Situacao_Relacionamento', 
    Comentarios = '$Comentarios', Comentarios2 = '$Comentarios2', 
    Responsavel = '$Responsavel', Tipo_Fornecedor = '$Tipo_Fornecedor'
    WHERE (Codigo = '$Codigo')";

    return $sql;
}

/*Função para inserir dados de fornecedores de serviços no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da inserção no banco de dados*/
function inserirFornecedoresServicos (string $Codigo, string $Empresa, string $Email, string $Situacao_Relacionamento, string $Comentarios, 
                                      string $Comentarios2, string $Responsavel, string $Tipo_Fornecedor){

    $sql = "INSERT INTO dados_estrutural.tb_Fornecedores (Codigo, Empresa, Email, Situacao_Relacionamento, 
    Comentarios, Comentarios2, Responsavel, Tipo_Fornecedor) 
    VALUES ('$Codigo', '$Empresa', '$Email', '$Situacao_Relacionamento', '$Comentarios', '$Comentarios2', 
            '$Responsavel', '$Tipo_Fornecedor')";

    return $sql;                             
}

/*Função para inserir dados de rigidez no banco de dados
 *Recebe como parametros as strings contendo os dados fornecidos no formulario HTML
 *Retorna a query SQL para execução da inserção no banco de dados*/
function inserirRigidez(string $Cod_Rigidez, string $Gradiente_Rolagem, string $Massa_Sem_Piloto, 
                        string $Massa_Nao_Suspensa, string $Massa_Nao_Susp_Diant, string $Massa_Nao_Susp_Tras,
                        string $Massa_DE, string $Massa_DD, string $Mass_TE, string $Massa_TD, string $K_Mola_DD,
                        string $K_Mola_DE, string $K_Mola_TD, string $K_Mola_TE, string $Perc_Peso_DD,
                        string $Perc_Peso_DE, string $Perc_Peso_TD, string $Perc_Peso_TE, string $Perc_Peso_Diant,
                        String $Perc_Peso_Tras, string $Freq_Ress_Diant, string $Freq_Ress_Tras,
                        string $Transf_Lat_Diant, string $Transf_Lat_Tras, string $Rigidez_Molas_Tras,
                        string $Transf_Lat_Carga_Total, string $Rigidez_Mola_Diant){
                    
    $sql = "INSERT INTO dados_treino_setup.tb_rigidez (Cod_Rigidez, Gradiente_Rolagem, Massa_Sem_Piloto, 
    Massa_Nao_Suspensa, Massa_Nao_Susp_Diant, Massa_Nao_Susp_Tras, Massa_DE, Massa_DD, Mass_TE, Massa_TD, 
    K_Mola_DD, K_Mola_DE, K_Mola_TD, K_Mola_TE, Perc_Peso_DD, Perc_Peso_DE, Perc_Peso_TD, Perc_Peso_TE,
    Perc_Peso_Diant, Perc_Peso_Tras, Freq_Ress_Diant, Freq_Ress_Tras, Transf_Lat_Diant, Transf_Lat_Tras,
    Rigidez_Molas_Tras, Transf_Lat_Carga_Total, Rigidez_Mola_Diant)
    VALUES ('$Cod_Rigidez', '$Gradiente_Rolagem', '$Massa_Sem_Piloto', '$Massa_Nao_Suspensa', '$Massa_Nao_Susp_Diant',
    '$Massa_Nao_Susp_Tras', '$Massa_DE', '$Massa_DD', '$Mass_TE', '$Massa_TD', '$K_Mola_DD', '$K_Mola_DE', '$K_Mola_TD', 
    '$K_Mola_TE', '$Perc_Peso_DD', '$Perc_Peso_DE', '$Perc_Peso_TD', '$Perc_Peso_TE', '$Perc_Peso_Diant',
    '$Perc_Peso_Tras', '$Freq_Ress_Diant', '$Freq_Ress_Tras', '$Transf_Lat_Diant', '$Transf_Lat_Tras', 
    '$Rigidez_Molas_Tras', '$Transf_Lat_Carga_Total', '$Rigidez_Mola_Diant')";

    return $sql;
}

/*Função para gerar o hash em SHA256 da senha do usuário
 *Recebe como parâmetro a senha em texto plano
 *Retorna a senha codificada no algoritmo supracitado*/
function passwordHash (string $password){
    $passowrdHashed = hash("sha256", $password);
    //echo $passowrdHashed;
    return $passowrdHashed;
}

/*Função para verificar se o usuário existe no banco de dados e se a senha está correta
 *Recebe como parâmetros o email do usuário a senha em hash e a string de conexão com o banco de
 *dados que contem a tabela de usuários.
 *Retorna um erro caso os dados não seja encontrados ou efetua o login e inicial uma sessão de usuário
 *Se a sessão houver sido encerrada, redireciona para o login novamente, caso contrário, redireciona para
 *home da aplicação*/ 
function validarUsuario (string $email, string $senha, $strcon3){

    $caminho = $_SERVER['PATH_INFO'];

    $sql = "SELECT * FROM tb_dados_usuarios WHERE email = \"$email\" AND senha = \"$senha\"";

    //echo $sql;

    $resultado = mysqli_query($strcon3,$sql) or die(printf("Error: %s\n", mysqli_error($strcon3)));

    if (mysqli_num_rows($resultado)<=0){
        //echo "Passei aqui if";
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='../html/formulario_login.php';</script>";
        die();
    }
    else{
        session_start();
        $_SESSION['usuario_logado'] = true;

        $ehRotaDeLogin = stripos($caminho, 'login');

        if (!isset($_SESSION['usuario_logado']) && $ehRotaDeLogin === false) {
            header('Location: ../html/formulario_login.php');
            exit();
        }
        //setcookie("login",$email);
        header("Location:../html/home.php");
      }   
}

/*Função para verificar se o email do usuário que está se cadastrando já se encontra cadastrado no banco
 *de dados de usuários.
 *Recebe como parâmetros o email e a string de conexão com o banco de dados de usuários.
 *Caso o email já exista no banco, retorna um erro e interrompe o cadastro. Caso contrário, continua
 *com a efetuação do mesmo.*/
function usuarioExiste (string $email, $strcon3){
    $sql = "SELECT * FROM tb_dados_usuarios WHERE email = \"$email\"";

    //echo $sql;

    $resultado = mysqli_query($strcon3,$sql) or die(printf("Error: %s\n", mysqli_error($strcon3)));

    if (mysqli_num_rows($resultado)!=0){
        //echo "Passei aqui if";
        echo"<script language='javascript' type='text/javascript'>
        alert('Email já cadastrado !');window.location
        .href='../html/formulario_cadastro.php';</script>";
        return (1);
        die();
    }
}

/*Função para cadastrar usuário no sistema.
 *Recebe com parâmetros os dados do formulário de cadastro.
 *Efetua uma query de inserção no banco de dados.
 *Retorna um erro caso haja algum problema ou TRUE caso a query tenha sido efetuada com sucesso.*/
function cadastrarUsuario (string $nome, string $sobrenome, string $email, 
                           string $area, string $microarea, string $senha, $strcon3){
    
    $sql = "INSERT INTO dados_usuarios.tb_dados_usuarios (email, senha, nome, sobrenome, area, microArea) 
    VALUES ('$email', '$senha', '$nome', '$sobrenome', '$area', '$microarea')";

    $resultado = mysqli_query($strcon3,$sql) or die(printf("Error: %s\n", mysqli_error($strcon3)));

    return $resultado;  
    

}

/*Função que verifica se há sessão de usuário válida.
 *Em cada página da aplicação essa verificação é feita e se em algum momento o usuário encerrou
 *a sessão e tentou acessar novamente as páginas internas, será redirecionado para o login.*/
function verificarSessao (){
    $caminho = $_SERVER['PHP_SELF'];
        
    session_start();      
  
    $ehRotaDeLogin = stripos($caminho, 'login');
  
    if (!isset($_SESSION['usuario_logado']) && $ehRotaDeLogin === false) {
        header('Location: ../html/formulario_login.php');
        exit();
    }
}
?>
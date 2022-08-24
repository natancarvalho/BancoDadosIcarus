<?php

  function js_fornecedoresServicos (){
    echo "<form action=\"alterar_fornecedores.php\" method=\"post\">
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Codigo\" id=\"Codigo\" placeholder=\"Código da Empresa\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Empresa\" id=\"Empresa\" placeholder=\"Nome da Empresa\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Telefone\" id=\"Telefone\" placeholder=\"Telefone\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Email\" id=\"Email\" placeholder=\"Email para contato\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Situacao_Relacionamento\" id=\"Situacao_Relacionamento\" placeholder=\"Situação do Relacionamento\">
            </div>
            <div class=\"form-group\">
              <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios\" id=\"Comentarios\" placeholder=\"Comentários\"></textarea>
            </div>
            <div class=\"form-group\">
              <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios2\" id=\"Comentarios2\" placeholder=\"Comentários 2\"></textarea>
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Responsavel\" id=\"Responsavel\" placeholder=\"Nome do responsável pelo contato\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Tipo_Fornecedor\" id=\"Tipo_Fornecedor\" placeholder=\"Tipo de Fornecedor: Material ou Serviços\">
            </div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>   
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
    </div>	
  </div>
</div>";
  }

  function js_fornecedoresMaterial (){
    echo "<form action=\"alterar_fornecedores.php\" method=\"post\">
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"codigo\" id=\"codigo\" placeholder=\"Código da Empresa\">
              </div
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"empresa\" id=\"empresa\" placeholder=\"Nome da Empresa\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"telefone\" id=\"telefone\" placeholder=\"Telefone\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"email\" id=\"email\" placeholder=\"Email para contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"situacaoRelacionamento\" id=\"situacaoRelacionamento\" placeholder=\"Situação do Relacionamento\">
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"comentarios\" id=\"comentarios\" placeholder=\"Comentários\"></textarea>
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"comentarios2\" id=\"comentarios2\" placeholder=\"Comentários 2\"></textarea>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"responsavel\" id=\"responsavel\" placeholder=\"Nome do responsável pelo contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"tipoFornecedor\" id=\"tipoFornecedor\" placeholder=\"Tipo de Fornecedor: Material ou Serviços\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_265\" id=\"Tubo1_265\" placeholder=\"Tubo 1&quot; 2,65 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_200\" id=\"Tubo1_200\" placeholder=\"Tubo 1&quot; 2,00 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_160\" id=\"Tubo1_160\" placeholder=\"Tubo 1&quot; 1,60 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_120	\" id=\"Tubo1_120	\" placeholder=\"Tubo 1&quot; 1,20 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_34\" id=\"Tubo_34\" placeholder=\"Tubo 3/4&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_58\" id=\"Tubo_58\" placeholder=\"Tubo 5/8&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_Quadrado\" id=\"Tubo_Quadrado\" placeholder=\"Tubo quadrado 30mmx30mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Barra_Chata1\" id=\"Barra_Chata1\" placeholder=\"Barra chata 1&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Chapa_Aco3\" id=\"Chapa_Aco3\" placeholder=\"Chapa de aço 3 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Chapa_Aco2\" id=\"Chapa_Aco2\" placeholder=\"Chapa de aço 2 mm\">
              </div>  
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>   
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
    </div>	
  </div>
</div>";
  }

  function js_inserir_fornecedoresServicos (){
    echo "<form action=\"../insercao/inserir_fornecedores_servicos.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Codigo\" id=\"Codigo\" placeholder=\"Código da Empresa\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Empresa\" id=\"Empresa\" placeholder=\"Nome da Empresa\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"Telefone\" id=\"Telefone\" placeholder=\"Telefone\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Email\" id=\"Email\" placeholder=\"Email para contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Situacao_Relacionamento\" id=\"Situacao_Relacionamento\" placeholder=\"Situação do Relacionamento\">
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios\" id=\"Comentarios\" placeholder=\"Comentários\"></textarea>
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios2\" id=\"Comentarios2\" placeholder=\"Comentários 2\"></textarea>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Responsavel\" id=\"Responsavel\" placeholder=\"Nome do responsável pelo contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tipo_Fornecedor\" id=\"Tipo_Fornecedor\" placeholder=\"Tipo de Fornecedor: Material ou Serviços\">
              </div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>   
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
    </div>	
  </div>
</div>";
  }

  function js_inserir_fornecedoresMaterial (){
    echo "<form action=\"alterar_fornecedores.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Codigo\" id=\"Codigo\" placeholder=\"Código da Empresa\">
              </div
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Empresa\" id=\"Empresa\" placeholder=\"Nome da Empresa\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"Telefone\" id=\"Telefone\" placeholder=\"Telefone\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Email\" id=\"Email\" placeholder=\"Email para contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Situacao_Relacionamento\" id=\"Situacao_Relacionamento\" placeholder=\"Situação do Relacionamento\">
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios\" id=\"Comentarios\" placeholder=\"Comentários\"></textarea>
              </div>
              <div class=\"form-group\">
                <textarea rows=\"2\" class=\"form-control\" name=\"Comentarios2\" id=\"Comentarios2\" placeholder=\"Comentários 2\"></textarea>
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Responsavel\" id=\"Responsavel\" placeholder=\"Nome do responsável pelo contato\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tipo_Fornecedor\" id=\"Tipo_Fornecedor\" placeholder=\"Tipo de Fornecedor: Material ou Serviços\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_265\" id=\"Tubo1_265\" placeholder=\"Tubo 1&quot; 2,65 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_200\" id=\"Tubo1_200\" placeholder=\"Tubo 1&quot; 2,00 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_160\" id=\"Tubo1_160\" placeholder=\"Tubo 1&quot; 1,60 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo1_120	\" id=\"Tubo1_120	\" placeholder=\"Tubo 1&quot; 1,20 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_34\" id=\"Tubo_34\" placeholder=\"Tubo 3/4&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_58\" id=\"Tubo_58\" placeholder=\"Tubo 5/8&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Tubo_Quadrado\" id=\"Tubo_Quadrado\" placeholder=\"Tubo quadrado 30mmx30mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Barra_Chata1\" id=\"Barra_Chata1\" placeholder=\"Barra chata 1&quot; (várias espessuras)\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Chapa_Aco3\" id=\"Chapa_Aco3\" placeholder=\"Chapa de aço 3 mm\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Chapa_Aco2\" id=\"Chapa_Aco2\" placeholder=\"Chapa de aço 2 mm\">
              </div>  
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>   
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
    </div>	
  </div>
</div>";
  }

  function js_temperaturas (){
    echo "<form action=\"alterar_temperatura.php\" method=\"post\">
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title custom_align\" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Cod_Temperaturas\" id=\"Cod_Temperaturas\" placeholder=\"Código das Temperaturas Ex: TEMP01\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"Temp_Ambiente\" id=\"Temp_Ambiente\" placeholder=\"Temperatura da Ambiente\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Temp_Pista\" id=\"Temp_Pista\" placeholder=\"Temperatura da Pista\">
              </div> 
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form> 
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
        </div>	
      </div>
    </div>";
  }

  function js_inserir_temp (){
    echo "<form action=\"../insercao/inserir_temperatura.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Cod_Temperaturas\" id=\"Cod_Temperaturas\" placeholder=\"Código das Temperaturas Ex: TEMP01\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"Temp_Ambiente\" id=\"Temp_Ambiente\" placeholder=\"Temperatura da Ambiente\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Temp_Pista\" id=\"Temp_Pista\" placeholder=\"Temperatura da Pista\">
              </div> 
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Inserir</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>";
  }

  function js_inserir_setup_susp () {
    echo "<form action=\"../insercao/inserir_setup_susp.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
            <h4 class=\"modal-title \" id=\"Heading\">Insira os dados</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Cod_Setup_Susp\" id=\"Cod_Setup_Susp\" placeholder=\"Código do Setup de Suspensão Ex: STSUSF1901\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Modelo_Carro\" id=\"Modelo_Carro\" placeholder=\"Modelo do Carro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Data_Treino\" id=\"Data_Treino\" placeholder=\"Data do treino Ex: 2020-02-15\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Massa_Com_Piloto\" id=\"Massa_Com_Piloto\" placeholder=\"Massa do Carro com Piloto\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Rigidez_ARB\" id=\"Rigidez_ARB\" placeholder=\"Rigidez ARB\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Ride_Rate_Diant\" id=\"Ride_Rate_Diant\" placeholder=\"Ride Rate Dianteiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Ride_Rate_Tras\" id=\"Ride_Rate_Tras\" placeholder=\"Ride Rate Traseiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Kit_Aerodinamico\" id=\"Kit_Aerodinamico\" placeholder=\"Kit Aerodinamico Ex: 0 = Não ou 1 = Sim\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Camber\" id=\"Camber\" placeholder=\"Camber\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Toe\" id=\"Toe\" placeholder=\"Toe\">
            </div>
          </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Inserir</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>";
  }

  function js_alterar_setup_susp () {
    echo "<form action=\"alterar_setup_susp.php\" method=\"post\">
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
            <h4 class=\"modal-title \" id=\"Heading\">Altere os dados</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Cod_Setup_Susp\" id=\"Cod_Setup_Susp\" placeholder=\"Código do Setup de Suspensão Ex: STSUSF1901\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Modelo_Carro\" id=\"Modelo_Carro\" placeholder=\"Modelo do Carro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Data_Treino\" id=\"Data_Treino\" placeholder=\"Data do treino Ex: 2020-02-15\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Massa_Com_Piloto\" id=\"Massa_Com_Piloto\" placeholder=\"Massa do Carro com Piloto\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Rigidez_ARB\" id=\"Rigidez_ARB\" placeholder=\"Rigidez ARB\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Ride_Rate_Diant\" id=\"Ride_Rate_Diant\" placeholder=\"Ride Rate Dianteiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Ride_Rate_Tras\" id=\"Ride_Rate_Tras\" placeholder=\"Ride Rate Traseiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Kit_Aerodinamico\" id=\"Kit_Aerodinamico\" placeholder=\"Kit Aerodinamico Ex: 0 = Não ou 1 = Sim\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Camber\" id=\"Camber\" placeholder=\"Camber\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Toe\" id=\"Toe\" placeholder=\"Toe\">
            </div>
          </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Inserir</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>";
  }

  function js_alterar_geometria_suspensao () {
    echo "<form action=\"alterar_caracteristicas_carro.php\" method=\"post\">
    <div class=\"modal fade\" id=\"edit\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
            <h4 class=\"modal-title \" id=\"Heading\">Altere os dados</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Cod_Geo_Susp\" id=\"Cod_Geo_Susp\" placeholder=\"Código de Geometria de Suspensão Ex: GEOF1901\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Entre_Eixos\" id=\"Entre_Eixos\" placeholder=\"Entre Eixos\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Altura_Roll_Axis\" id=\"Altura_Roll_Axis\" placeholder=\"Altura do Roll Axis\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Steer_Axis_Inc_Diant\" id=\"Steer_Axis_Inc_Diant\" placeholder=\"Steer Axis Inclination Dianteiro\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Steer_Axis_Inc_Tras\" id=\"Steer_Axis_Inc_Tras\" placeholder=\"Steer Axis Inclination Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Scrub_Radius_Dianteiro\" id=\"Scrub_Radius_Dianteiro\" placeholder=\"Scrub Radius Dianteiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Scrub_Radius_Tras\" id=\"Scrub_Radius_Tras\" placeholder=\"Scrub Radius Traseiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Caster_Diant\" id=\"Caster_Diant\" placeholder=\"Caster Dianteiro\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Caster_Tras\" id=\"Caster_Tras\" placeholder=\"Caster Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Estat_Diant\" id=\"Alt_Estat_Diant\" placeholder=\"Altura Estática Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Estat_Tras\" id=\"Alt_Estat_Tras\" placeholder=\"Altura Estática Traseira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Dist_Long_CG_Diant\" id=\"Dist_Long_CG_Diant\" placeholder=\"Distância Longitudinal até o CG Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Dist_Long_CG_Tras\" id=\"Dist_Long_CG_Tras\" placeholder=\"Distância Longitudinal até o CG Traseira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Mot_Ratio_Diant\" id=\"Mot_Ratio_Diant\" placeholder=\"Motion Ratio Dianteiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Mot_Ratio_Tras\" id=\"Mot_Ratio_Tras\" placeholder=\"Motion Ratio Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Roll_Center_Tras\" id=\"Alt_Roll_Center_Tras\" placeholder=\"Altura do Roll Center_Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Roll_Center_Diant\" id=\"Alt_Roll_Center_Diant\" placeholder=\"Altura do Roll Center_Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Altura_CG\" id=\"Altura_CG\" placeholder=\"Altura do CG\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Distancia_CG_Roll_Axis\" id=\"Distancia_CG_Roll_Axis\" placeholder=\"Distância do CG ao Roll Axis\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Media\" id=\"Bitola_Media\" placeholder=\"Bitola Média\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Diant\" id=\"Bitola_Diant\" placeholder=\"Bitola Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Tras\" id=\"Bitola_Tras\" placeholder=\"Bitola Traseira\">
            </div>
          </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Inserir</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>";
  }

  function js_inserir_geometria_suspensao () {
    echo "<form action=\"../insercao/inserir_geo_susp.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
            <h4 class=\"modal-title \" id=\"Heading\">Insira os dados</h4>
          </div>
          <div class=\"modal-body\">
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Cod_Geo_Susp\" id=\"Cod_Geo_Susp\" placeholder=\"Código de Geometria de Suspensão Ex: GEOF1901\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Entre_Eixos\" id=\"Entre_Eixos	\" placeholder=\"Entre Eixos\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Altura_Roll_Axis\" id=\"Altura_Roll_Axis\" placeholder=\"Altura do Roll Axis\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Steer_Axis_Inc_Diant\" id=\"Steer_Axis_Inc_Diant\" placeholder=\"Steer Axis Inclination Dianteiro\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Steer_Axis_Inc_Tras\" id=\"Steer_Axis_Inc_Tras\" placeholder=\"Steer Axis Inclination Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Scrub_Radius_Dianteiro\" id=\"Scrub_Radius_Dianteiro\" placeholder=\"Scrub Radius Dianteiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Scrub_Radius_Tras\" id=\"Scrub_Radius_Tras\" placeholder=\"Scrub Radius Traseiro\">
            </div> 
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Caster_Diant\" id=\"Caster_Diant\" placeholder=\"Caster Dianteiro\">
            </div>
            <div class=\"form-group\">            
              <input class=\"form-control \" type=\"text\" name=\"Caster_Tras\" id=\"Caster_Tras\" placeholder=\"Caster Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Estat_Diant\" id=\"Alt_Estat_Diant\" placeholder=\"Altura Estática Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Estat_Tras\" id=\"Alt_Estat_Tras\" placeholder=\"Altura Estática Traseira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Dist_Long_CG_Diant\" id=\"Dist_Long_CG_Diant\" placeholder=\"Distância Longitudinal até o CG Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Dist_Long_CG_Tras\" id=\"Dist_Long_CG_Tras\" placeholder=\"Distância Longitudinal até o CG Traseira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Mot_Ratio_Diant\" id=\"Mot_Ratio_Diant\" placeholder=\"Motion Ratio Dianteiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Mot_Ratio_Tras\" id=\"Mot_Ratio_Tras\" placeholder=\"Motion Ratio Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Roll_Center_Tras\" id=\"Alt_Roll_Center_Tras\" placeholder=\"Altura do Roll Center_Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Alt_Roll_Center_Diant\" id=\"Alt_Roll_Center_Diant\" placeholder=\"Altura do Roll Center_Traseiro\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Altura_CG\" id=\"Altura_CG	\" placeholder=\"Altura do CG\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Distancia_CG_Roll_Axis\" id=\"Distancia_CG_Roll_Axis\" placeholder=\"Distância do CG ao Roll Axis\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Media\" id=\"Bitola_Media\" placeholder=\"Bitola Média\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Diant\" id=\"Bitola_Diant\" placeholder=\"Bitola Dianteira\">
            </div>
            <div class=\"form-group\">
              <input class=\"form-control\" type=\"text\" name=\"Bitola_Tras\" id=\"Bitola_Tras\" placeholder=\"Bitola Traseira\">
            </div>
          </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Inserir</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>";
  }

  function js_inserir_rigidez (){
    echo "<form action=\"../insercao/inserir_rigidez.php\" method=\"post\">
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insert\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"material-icons\" aria-hidden=\"true\">disabled_by_default</span></button>
              <h4 class=\"modal-title \" id=\"Heading\">Edit Your Detail</h4>
            </div>
            <div class=\"modal-body\">
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Cod_Rigidez\" id=\"Cod_Rigidez\" placeholder=\"Código de Rigidez de Rolagem ex: RIGF1901\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Gradiente_Rolagem\" id=\"Gradiente_Rolagem\" placeholder=\"Gradiente de Rolagem\">
              </div>
              <div class=\"form-group\">            
                <input class=\"form-control \" type=\"text\" name=\"Massa_Sem_Piloto\" id=\"Massa_Sem_Piloto\" placeholder=\"Massa do carro sem piloto em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_Nao_Suspensa\" id=\"Massa_Nao_Suspensa\" placeholder=\"Massa suspensa total do carro em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_Nao_Susp_Diant\" id=\"Massa_Nao_Susp_Diant\" placeholder=\"Massa suspensa dianteira do carro em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_Nao_Susp_Tras\" id=\"Massa_Nao_Susp_Tras\" placeholder=\"Massa suspensa traseira do carro em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_DE\" id=\"Massa_DE\" placeholder=\"Massa dianteria esquerda em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_DD\" id=\"Massa_DD\" placeholder=\"Massa dianteria direita em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Mass_TE\" id=\"Mass_TE\" placeholder=\"Massa traseira esquerda em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Massa_TD\" id=\"Massa_TD\" placeholder=\"Massa traseira direita em Kg\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"K_Mola_DD\" id=\"K_Mola_DD\" placeholder=\"K da mola dianteira direita\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"K_Mola_DE\" id=\"K_Mola_DE\" placeholder=\"K da mola dianteira esquerda\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"K_Mola_TD\" id=\"K_Mola_TD\" placeholder=\"K da mola traseira direita\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"K_Mola_TE\" id=\"K_Mola_TE\" placeholder=\"K da mola traseira esquerda\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_DD\" id=\"Perc_Peso_DD\" placeholder=\"Percentual de peso dianteiro direito\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_DE\" id=\"Perc_Peso_DE\" placeholder=\"Percentual de peso dianteiro esquerdo\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_TD\" id=\"Perc_Peso_TD\" placeholder=\"Percentual de peso traseiro direito\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_TE\" id=\"Perc_Peso_TE\" placeholder=\"Percentual de peso Traseiro esquerdo\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_Diant\" id=\"Perc_Peso_Diant\" placeholder=\"Percentual de peso dianteiro\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Perc_Peso_Tras\" id=\"Perc_Peso_Tras\" placeholder=\"Percentual de peso traseiro\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Freq_Ress_Diant\" id=\"Freq_Ress_Diant\" placeholder=\"Frquência de ressonância dianteira\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Freq_Ress_Tras\" id=\"Freq_Ress_Tras\" placeholder=\"Frquência de ressonância traseira\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Transf_Lat_Diant\" id=\"Transf_Lat_Diant\" placeholder=\"Transferência lateral dianteira\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Transf_Lat_Tras\" id=\"Transf_Lat_Tras\" placeholder=\"Transferência lateral traseira\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Rigidez_Molas_Tras\" id=\"Rigidez_Molas_Tras\" placeholder=\"Rigidez das molas traseiras\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Transf_Lat_Carga_Total\" id=\"Transf_Lat_Carga_Total\" placeholder=\"Transferência lateral de carga total\">
              </div>
              <div class=\"form-group\">
                <input class=\"form-control\" type=\"text\" name=\"Rigidez_Mola_Diant\" id=\"Rigidez_Mola_Diant\" placeholder=\"Rigidez das molas dianteiras\">
              </div>
            </div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-icarus btn-lg\" style=\"width: 100%;\"><span class=\"material-icons\">check_circle</span> Atualizar</button>
            </div>
        </div>
        <!-- /.modal-content --> 
      </div>
          <!-- /.modal-dialog --> 
    </div>
  </form>   
    <div class=\"modal fade\" id=\"delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"edit\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
    <div class=\"modal-content\">
          <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></button>
        <h4 class=\"modal-title custom_align\" id=\"Heading\">Delete this entry</h4>
      </div>
          <div class=\"modal-body\">
      
      <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Are you sure you want to delete this Record?</div>
      </div>
        <div class=\"modal-footer \">
        <button type=\"button\" class=\"btn btn-success\" ><span class=\"glyphicon glyphicon-ok-sign\"></span> Yes</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span class=\"glyphicon glyphicon-remove\"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
    </div>
      <!-- /.modal-dialog --> 
    </div>	
  </div>
</div>";
}

<?php

class DashboardController{

    //Função index, responsavel por exibir a página dashboard
    public function index(){

        //Inicia a sessão pra verificar se o usuário está autenticado
        session_start();
        if(!isset($_SESSION['usuario_id'])){
            //Redireciona o usuário para a página inicial
            header('Location: index.php');
            exit; //garante que o script seja interrompido
        }
        
        //Se o usuário estiver autenticado, inclui a view 'dashboard', que exibe o painel de controle
        include 'views/dashboard.php';

    }
}

?>

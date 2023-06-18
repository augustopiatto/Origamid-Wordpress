<!-- Se quando entrar no localhost nao ver nada, é porque falta logar -->
<!-- Entre no /wp-admin -->
<?php 

$template_diretorio = get_template_directory();

require_once($template_diretorio . "/custom-post-type/produto.php");
require_once($template_diretorio . "/custom-post-type/transacao.php");

require_once($template_diretorio . "/endpoints/usuario-post.php");

?>

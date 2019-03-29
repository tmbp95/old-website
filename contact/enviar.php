<?

$nome      = $_POST["nome"];
$site     = $_POST["site"];
$email   = $_POST["email"];
$assunto   = $_POST["assunto"];
$mensagem  = $_POST["mensagem"];

include ('confirmar.php');

global $email;
$data      = date("d/m/y");             
$ip        = $_SERVER['REMOTE_ADDR'];         
$navegador = $_SERVER['HTTP_USER_AGENT'];    
$hora      = date("H:i");                       

mail ("design@tmbp.net",
      "$assunto",
      "Informações do contacto:\nIp: $ip \nNavegador: $navegador \n\nE-mail: $email \nNome: $nome \nAssunto: $assunto \n\nMensagem: \n\n$mensagem",
      "From: $email"
     );
$site   = "http://design.tmbp.net/";          
$titulo = "TMBP.NET - DESIGNS";      
$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

mail("$email",
     "$titulo",
     "$msg",
     "From: $site"
    );
echo '<script type="text/javascript">alert("Obrigado, '; echo $nome; echo'! Em breve entrarei em contacto consigo.");location = "index.php";</script>'; 
?>


<?php echo 'Ola amigo!' ?>
<?php if(!empty($_POST['name'])) {
echo "Otimo deu tudo certo, {$_POST['name']}, bem vindo e vamos continuar com PHP.";
} ?>
<form action="<?php $PHP_SELF; ?>" method="post">
Digite seu nome: <input type="text" name="name" />
<input type="submit" />
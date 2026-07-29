<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $nascimento = $_POST["nascimento"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $sexo = $_POST["sexo"];
    $curso = $_POST["curso"];
    $observacoes = $_POST["observacoes"];
}
?>

<form method="POST">
    Nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    Telefone: <input type="text" name="telefone"><br>
    Data de nascimento: <input type="date" name="nascimento"><br>
    Cidade: <input type="text" name="cidade"><br>
    Estado: <input type="text" name="estado"><br>

    Sexo:
    <select name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
        <option value="Outro">Outro</option>
    </select><br>

    Curso: <input type="text" name="curso"><br>
    Observações: <textarea name="observacoes"></textarea><br>

    <button type="submit">Cadastrar</button>
</form>

<?php if (isset($nome)): ?>

    <hr>
    <h3>Cartão de Cadastro</h3>
    <p><b>Nome:</b> <?= $nome ?></p>
    <p><b>Email:</b> <?= $email ?></p>
    <p><b>Telefone:</b> <?= $telefone ?></p>
    <p><b>Nascimento:</b> <?= $nascimento ?></p>
    <p><b>Cidade:</b> <?= $cidade ?></p>
    <p><b>Estado:</b> <?= $estado ?></p>
    <p><b>Sexo:</b> <?= $sexo ?></p>
    <p><b>Curso:</b> <?= $curso ?></p>
    <p><b>Observações:</b> <?= $observacoes ?></p>

<?php endif; ?>
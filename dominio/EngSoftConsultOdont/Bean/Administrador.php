<?php

require_once 'Funcionario.php';

/**
 * Description of Administrador
 *
 * @author Allane Régis <allaneregis@gmail.com> @author Elydillse Botelho <elydillse@hotmail.com> @author José Paulo <jose.paulo.95@hotmail.com> @author Samir Souza <samir.guitar@gmail.com>
 */
class Administrador extends Funcionario {

    public function __construct($nome, $cpf, $dataNascimento, $endereco, $contato, $matricula, $senha) {
        parent::__construct($nome, $cpf, $dataNascimento, $endereco, $contato, $matricula, $senha);
    }

}

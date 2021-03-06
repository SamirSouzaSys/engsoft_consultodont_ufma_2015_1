<?php

require_once 'GenericDAO.php';
require_once __DIR__.'/../Bean/Cirurgiao.php';

/**
 * Description of CirurgiaoDAO
 *
 * @author Allane Régis <allaneregis@gmail.com> @author Elydillse Botelho <elydillse@hotmail.com> @author José Paulo <jose.paulo.95@hotmail.com> @author Samir Souza <samir.guitar@gmail.com>
 */
class CirurgiaoDAO extends GenericDAO {

    function __construct($tableName, $tableColumns, $camposReferencia) {
        parent::__construct($tableName, $tableColumns, $camposReferencia);
    }

    function bindParamsObjInsert($stmt, $obj) {
        $stmt->bindParam(":nomecirurgiao", $obj->getNome(), PDO::PARAM_STR);
        $stmt->bindParam(":cpfcirurgiao", $obj->getCpf(), PDO::PARAM_INT);
        $stmt->bindParam(":dataNasccirurgiao", date("Y-m-d", strtotime($obj->getDataNascimento())), PDO::PARAM_STR);
        $stmt->bindParam(":enderecocirurgiao", $obj->getEndereco(), PDO::PARAM_STR);
        $stmt->bindParam(":contatocirurgiao", $obj->getContato(), PDO::PARAM_INT);
        $stmt->bindParam(":matricirurgiao", $obj->getMatricula(), PDO::PARAM_INT);
        $stmt->bindParam(":senhacirurgiao", $obj->getSenha(), PDO::PARAM_STR);
        $stmt->bindParam(":crocirurgiao", $obj->getCro(), PDO::PARAM_INT);
    }

    function getDadosObjInsert() {
        return " :nomecirurgiao, :cpfcirurgiao, :dataNasccirurgiao, :enderecocirurgiao, :contatocirurgiao, :matricirurgiao, :senhacirurgiao, :crocirurgiao ";
    }

    function getDadosObjSelectById() {
        $a;
    }

//    function montaArrayObjetos($stmt->fetch(PDO::FETCH_ASSOC),$arrayObjects){
    function montaArrayObjetos($stmt, &$arrayObjects) {

//        while($linha =  $stmt->fetch(PDO::FETCH_ASSOC)) {
        foreach ($stmt as $linha) {
            $cirurgiao = new Cirurgiao($linha['nome'], $linha['cpf'], $linha['dataNascimento'], $linha['endereco'], $linha['contato'], $linha['matricula'], $linha['senha'], $linha['cro']);
            $cirurgiao->setId($linha['id']);
            $arrayObjects[] = $cirurgiao;
        }
    }

}

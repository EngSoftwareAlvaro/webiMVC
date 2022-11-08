<?php
namespace App\model;

require_once "Conexao.php";

class Perguntas{
    private $id;
    private $pergunta;
    private $status;
    private $usuario_id;

    private $conexao;

    function __construct(
        $pergunta = null,
        $status = null,
        $usuario_id = 4
    ) {
        $this->id = null;
        $this->setPergunta($pergunta);
        $this->setStatus($status);
        $this->setUsuario_Id($usuario_id);

        $this->conexao = Conexao::getInstancia();
    }

    public function getId(){
        return $this->id;
    }
    public function setPergunta($pergunta){
        $this->pergunta = $pergunta;
    }
    public function getPergunta()
    {
        return $this->pergunta;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setUsuario_Id($usuario_id){
        $this->usuario_id = $usuario_id;
    }
    public function getUsuario_Id()
    {
        return $this->usuario_id;
    }

    public function criar()
    {
        if ($this->id != null)
            return false;

        $query = "INSERT INTO perguntas (pergunta,status,usuario_id,created,modified) VALUES ('" . $this->pergunta . "','" . $this->status . "','" . $this->usuario_id . "','" . date(DATE_ATOM) . "','" . date(DATE_ATOM) . "')";

        $result = pg_query($query);

        if ($result)
            $this->id = pg_last_oid($result);

        return $result;
    }

    public function ler($id = null)
    {
        if ($id == null) {
            $sql = "SELECT * FROM perguntas";
        } else {
            $sql = "SELECT * FROM perguntas WHERE id='$id'";
        }
        $returnValue = array();

        $result = pg_query($sql);

        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            array_push($returnValue, $line);
        }

        return $returnValue;
    }

    
    

    public function atualizar()
    {
        error_reporting(E_ERROR | E_PARSE);

        if ($this->id == null)
            return false;

        $query = "UPDATE perguntas SET pergunta= '" . $this->pergunta . "', status= '" . $this->status . "', usuario= '" . $this->usuario_id . "', modified= '" . date(DATE_ATOM) . "' WHERE id= '" . $this->id . "'";

        $result = pg_query($query);

        return $result;
    }

    public function deletar()
    {
        if ($this->id == null)
            return false;

        $query = "DELETE FROM perguntas WHERE id='" . $this->id . "'";

        $result = pg_query($query);
        
        if($result)
            $this->id = null;

        return $result;
    }

}


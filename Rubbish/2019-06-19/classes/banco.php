<?php

require_once 'autoload.php';

class banco {
// $pdo é o objeto
    private $pdo, $tabela;
// estabelece a conexão com o banco
    public function conexao() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=projeto', "root", "");// dbname é o nome do banco, o segundo campo o usuario e o terceiro é a senha do banco
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
// pega o nome de cada coluna do banco desejado
    public function obterCampos() {
        $consulta = $this->pdo->query("desc " . $this->tabela);

        while ($lista = $consulta->fetch()) {
            $campos [] = $lista[0];
        }
        return $campos;
    }
// verifica se o valor é uma data 
    public function validarData($campo) {
        $data = DateTime::createfromFormat('d/m/Y', $campo);
        if ($data && $data->format('d/m/Y')) {
            return true;
        } else {
            return false;
        }
    }
    // substitue o valore com :. ex: :codigo por $codigo
    public function geraStmt($sql, $vetor, $campos,$k){
        $stmt = $this->pdo->prepare($sql);       
            for ($j = 1; $j <= count($vetor)-$k; $j++) {
                if (is_numeric($vetor[$j])) {
                    $stmt->bindParam (':' . $campos[$j], $vetor[$j], PDO::PARAM_INT);
                    } elseif ($this->validarData($vetor[$j])) {
                    $stmt->bindParam(':' . $campos[$j], date("Y-m-d", strtotime(str_replace("/", "-", $vetor[$j]))), PDO::PARAM_STR);
                } else {
                    $stmt->bindParam(':' . $campos[$j], $vetor[$j], PDO::PARAM_STR);
                }
            }
            return $stmt;
    }

    public function select($sql) {
        $this->conexao();
        try {
            $consulta = $this->pdo->query($sql);
            $vetor = null;
            while ($linha = $consulta->fetch(PDO::FETCH_BOTH)) {
                $vetor[] = $linha; 
            }
            return $vetor;
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function inserir($vetor) {
        $this->conexao();
        try {
            $campos = $this->obterCampos();
            $sql = "INSERT INTO " . $this->tabela . "(";
            $i = 0;
            foreach ($campos as $v) {
                if ($i == 1) {
                    $sql .= $v;
                } elseif ($i > 1) {
                    $sql .= ", " . $v;
                }
                $i++;
            }
            $sql .= ") VALUES(";
            $i = 0;
            foreach ($campos as $v) {
                if ($i == 1) {
                    $sql .= ":" . $v;
                } elseif ($i > 1) {
                    $sql .= ", :" . $v;
                }
                $i++;
            }
            $sql .= ")";
            
            $stmt = $this->geraStmt($sql, $vetor, $campos,0);
            
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public function delete($id) {
        $this->conexao();
        try {
            $stmt = $this->pdo->prepare('DELETE FROM ' . $this->tabela . ' WHERE codigo = :id');
            $stmt->bindParam(':id', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function update($vetor) {
        $this->conexao();
        try {
            $sql = "UPDATE {$this->getTabela()} SET ";
            $campos = $this->obterCampos();
            $i = 0;
            foreach ($campos as $v) {
                if ($i == 1) {
                    $sql .= $v." = :" . $v;
                } elseif ($i > 1) {
                    $sql .= ", ".$v." = :" . $v;
                }
                $i++;
            }
            $sql .= " WHERE {$campos[0]} = :{$campos[0]}";
            $stmt = $this->geraStmt($sql, $vetor, $campos, 1);
            $stmt->bindParam (':' . $campos[0], $vetor[0], PDO::PARAM_INT);
            $stmt->execute();
            echo $stmt->rowCount();
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function getPdo() {
        return $this->pdo;
    }

    function getTabela() {
        return $this->tabela;
    }

    function setPdo($pdo) {
        $this->pdo = $pdo;
    }

    function setTabela($tabela) {
        $this->tabela = $tabela;
    }


}

<?php
    class Usuario
    {
        public string $nome;
        public int $idade;
        public string $email;

        public function cadastrar($nome, $idade, $email): string 
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->email = $email;

            return "O desenvolver Jr. <strong>{$this->nome}, idade</strong> {$this->idade }"." com email: <strong>" . $this->email . " </strong> foi cadastrado no curso de ADS, com sucesso.";
        }
    }
?>


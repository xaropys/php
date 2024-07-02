<?php

    class Test {
       private $nome;
       private $email;
       private $bairro;
       private $about;

      
    

       /**
        * Get the value of nome
        */
       public function getNome()
       {
              return $this->nome;
       }

       /**
        * Set the value of nome
        */
       public function setNome($nome): self
       {
              $this->nome = $nome;

              return $this;
       }

       /**
        * Get the value of email
        */
       public function getEmail()
       {
              return $this->email;
       }

       /**
        * Set the value of email
        */
       public function setEmail($email): self
       {
              $this->email = $email;

              return $this;
       }

       /**
        * Get the value of bairro
        */
       public function getBairro()
       {
              return $this->bairro;
       }

       /**
        * Set the value of bairro
        */
       public function setBairro($bairro): self
       {
              $this->bairro = $bairro;

              return $this;
       }

       /**
        * Get the value of about
        */
       public function getAbout()
       {
              return $this->about;
       }

       /**
        * Set the value of about
        */
       public function setAbout($about): self
       {
              $this->about = $about;

              return $this;
       }


       public function printAtributtes() 
       {
              $this->nome = $_POST['nome'];
              $this->email = $_POST['email'];

              $this->about = $_POST['about'];
              $this->bairro = $_POST['nome'];
              echo $nome->getNome() . $email->getEmail() . "\n" . echo $bairro->getBairro() . "\n" . echo $about->getAbout();
       }
    }
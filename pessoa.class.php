<?php //iniciando
//espaço	
	class Pessoa{ //declarando a classe Pessoa
		private $nome; //declarando a variavel nome
		private $endereco; //declarando a variavel endereco
		private $bairro; //declarando a variável bairro
		private $cep; //declarando a variável cep
		private $cidade; //declarando a variável cidade
		private $estado; //declarando a variável estado
//espaço
		public function setNome($nome) { //criando a função
			$this->nome = $nome; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function setEndereco($endereco) { //criando a funçao
			$this->endereco = $endereco; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function setBairro($bairro) { //criando a função
			$this->bairro = $bairro; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function setCep($cep) { //criando a função
			$this->cep = $cep; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function setCidade($cidade) { //criando a função
			$this->cidade = $cidade; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function setEstado($estado) { //criando a função
			$this->estado = $estado; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getNome() { //criando a função
			return $this->nome; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getEndereco() { //criando a função
			return $this->endereco; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getBairro() { //criando a função
			return $this->bairro; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getCep() { //criando a função
			return $this->cep; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getCidade() { //criando a função
			return $this->cidade; //encapsulando a variavel
		} //fechando a chave
//espaço
		public function getEstado() { //criando a função
			return $this->estado; //encapsulando a variavel
//espaço			
		} //fechando a chave
	}
//finalizando?>
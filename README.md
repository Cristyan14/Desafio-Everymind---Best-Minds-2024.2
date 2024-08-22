# Nunes Sports - Sistema de Gerenciamento de Produtos

Este projeto foi desenvolvido como parte de um desafio técnico para a empresa fictícia **Nunes Sports**. O objetivo é criar um sistema completo de gerenciamento de produtos, permitindo a exibição, criação, edição e exclusão de produtos em uma base de dados.

## Visão Geral

O sistema de gerenciamento de produtos foi construído para atender as necessidades do board da empresa Nunes Sports. A aplicação permite realizar operações CRUD (Create, Read, Update, Delete) em uma base de dados, refletindo as ações diretamente no banco de dados.

## Tecnologias Utilizadas

O projeto foi desenvolvido utilizando as seguintes tecnologias:

**Backend:**

- PHP
- MySQL

**Frontend:**

- HTML5
- CSS3
- JavaScript

**Ferramentas de Desenvolvimento:**

- XAMPP (para desenvolvimento local)
- Git (para controle de versão)

## Estrutura do Projeto

O projeto segue uma estrutura organizada para facilitar a manutenção e a escalabilidade:

|-- css/
| |-- style.css # Arquivo de estilo principal
|-- inserir.php # Página de inserção de novos produtos
|-- inserirSave.php # Script de salvamento dos dados inseridos
|-- dashboard.php # Página principal com a exibição e manipulação dos produtos
|-- config.php # Arquivo de configuração do banco de dados
|-- README.md # Documentação do projeto

## Funcionalidades

### Exibição dos Produtos

- Os produtos cadastrados são exibidos em uma tabela na página principal (`dashboard.php`).
- É possível pesquisar produtos com base em qualquer campo (nome, código, descrição, preço).

### Criação de Produtos

- Através da página `inserir.php`, novos produtos podem ser adicionados ao banco de dados.
- A validação básica dos campos é feita para garantir que todos os campos obrigatórios sejam preenchidos.

### Edição de Produtos

- A funcionalidade de edição permite atualizar as informações dos produtos existentes diretamente na tabela.

### Deleção de Produtos

- Os produtos podem ser removidos da base de dados com um simples clique.

## Como Executar o Projeto

### Configuração do Ambiente

1. Certifique-se de ter o XAMPP (ou qualquer outro servidor local com PHP e MySQL) instalado.
2. Clone este repositório para o diretório `htdocs` do XAMPP.
3. Inicie o Apache e o MySQL a partir do painel de controle do XAMPP.

### Configuração do Banco de Dados

1. Crie um banco de dados MySQL com o nome desejado.
2. Execute o seguinte script SQL para criar a tabela `produto`:

   ```sql
   CREATE TABLE produto (
       id_prod INT AUTO_INCREMENT PRIMARY KEY,
       codigo_prod VARCHAR(200) NOT NULL,
       nome_prod VARCHAR(200) NOT NULL,
       descri_prod VARCHAR(300) NOT NULL,
       preco_prod DECIMAL(20,2) NOT NULL
   );
### Atualize as credenciais de acesso ao banco de dados no arquivo `config.php`.

## Executando a Aplicação

Acesse o navegador e digite `http://localhost/desafio_everymind/dashboard.php` para visualizar e interagir com a aplicação.

## Boas Práticas e Padrões

O desenvolvimento do projeto seguiu princípios de **Clean Code** e **SOLID** para garantir código limpo, organizado e de fácil manutenção. As operações CRUD foram implementadas com segurança e eficiência, com a preocupação de que o sistema possa lidar com grandes volumes de dados.

## Conclusão

Este projeto demonstra a capacidade de implementar um sistema completo de gerenciamento de produtos, com funcionalidades essenciais e uma interface amigável. Ele pode ser expandido e personalizado conforme as necessidades da empresa Nunes Sports.

## Autor

Desenvolvido por **Cristyan Lisboa**.


## Instruções para Uso

O arquivo **index.html** pode ser usado diretamente no GitHub Pages, mas se você for **executar o projeto em um servidor PHP localmente**, **salve o arquivo como `index.php`** para que o PHP funcione corretamente e o formulário seja processado. 

🚨 **IMPORTANTE:** 🚨 Ao usar em um servidor PHP, não se esqueça de renomear o arquivo **`index.html`** para **`index.php`** para que o processamento PHP ocorra corretamente.

## Projeto Online: ##

**Página Inicial:**

**[http://feedbackusuario.42web.io](http://feedbackusuario.42web.io)**

**Lista de Feedbacks**

**[http://feedbackusuario.42web.io/feedbacks.php](http://feedbackusuario.42web.io/feedbacks.php)**

## Descrição ##

O Feedback do Usuário é uma aplicação simples e funcional que permite coletar e exibir feedbacks dos usuários em tempo real. Este projeto foi desenvolvido como uma forma prática de implementar conceitos básicos de HTML , CSS , e PHP , com armazenamento local em arquivos para gerenciar os dados enviados pelos usuários.

## Funcionalidades ##

**Envio de Feedbacks:**

Os usuários podem preencher um formulário com nome e comentário.
Após o envio, o feedback é salvo automaticamente em um arquivo .txt.

**Exposição de Feedbacks**

Os feedbacks são exibidos em uma página dedicada, que mostra uma lista de todos os comentários enviados.

**Armazenamento local em arquivo:**

Os dados do formulário são armazenados em um arquivo feedbacks.txt diretamente no servidor, simulando um banco de dados simples.

## Tecnologias Utilizadas ##

**Front-end:**

***HTML:*** Para estruturar o site.

***CSS:*** Para estilização e melhoria da interface do usuário.

**Backend:**

***PHP:*** Para processar os dados do formulário, salve no arquivo local e exiba-os na página de feedbacks.

## Melhorias Futuras ##

**Adicionar Validação do Formulário:**

Validar campos (nome e feedback) antes do envio.

Exibir mensagens de erro, caso os campos estejam vazios.

**Melhor Estilo com CSS Avançado:**

Aplique um design mais moderno e responsivo.

animações e transições para aprimorar a experiência do usuário.

**Usar Banco de Dados:**

Substitua o armazenamento em arquivo por um banco de dados como MySQL para maior escalabilidade.

**Implementar Filtros e Ordenação:**

Permitir filtrar feedbacks por nome ou dados.

Ordenar os feedbacks de acordo com as preferências do usuário.

**Funcionalidade de Exclusão de Feedbacks:**

Adicionar uma opção para remover feedbacks indesejados.

## Arquivos do Projeto ##

**índex.html**

Página inicial do projeto com o formulário de envio de feedbacks.

**process.php:**

Arquivo PHP que processa os dados enviados no formulário e salva no arquivo local feedbacks.txt.

**feedbacks.php:**

Página que exibe uma lista de feedbacks enviados pelos usuários.

**style.css**

Arquivo de estilização que define o design das páginas.

***feedbacks.txt:***

Arquivo de armazenamento local contendo os feedbacks enviados.

## Como Visualizar o Projeto ##

**O projeto está hospedado gratuitamente no InfinityFree e pode ser acessado pelos links:**

***Página Inicial (Formulário):***

**[http://feedbackusuario.42web.io](http://feedbackusuario.42web.io)**

***Comentários Salvos:*** 

**[http://feedbackusuario.42web.io/feedbacks.php](http://feedbackusuario.42web.io/feedbacks.php)**

## Contribuições ##

**Contribuições são bem-vindas! Sinta-se à vontade para:**

***Relatar problemas.***

***Sugerir melhorias.***

***Enviar solicitações pull.***

# Enviar Email - Projeto PHP com SwiftMailer
Este projeto é uma implementação simples de envio de e-mails usando PHP e a biblioteca SwiftMailer. Ele foi desenvolvido para ilustrar como configurar e enviar e-mails de forma segura e eficiente, utilizando SMTP e variáveis de ambiente para manter credenciais sensíveis protegidas.<br></br>

# Descrição do Projeto
O objetivo deste projeto é demonstrar a utilização do SwiftMailer, uma poderosa biblioteca PHP para envio de e-mails, com a configuração de um servidor SMTP (ex: Gmail) e a integração de variáveis de ambiente para proteger credenciais como e-mail e senha.<br></br>

# Funcionalidades
**Envio de e-mails:** O projeto permite o envio de e-mails personalizados para um ou mais destinatários usando um servidor SMTP.
**Autenticação SMTP segura:** Utiliza variáveis de ambiente para manter as credenciais de e-mail e senha protegidas, evitando que informações sensíveis fiquem expostas no código-fonte.
**Personalização de e-mail:** O usuário pode enviar e-mails com diferentes assuntos e corpo de mensagem via um formulário simples.
**Configuração do servidor de e-mail:** Configuração simples e segura de um servidor SMTP, como o Gmail, para enviar e-mails.<br></br>

# Aplicações Práticas
Este projeto tem várias aplicações práticas em diferentes contextos:<br></br>

### 1. Formulários de Contato em Sites
Muitas vezes, sites precisam de um formulário de contato para enviar e-mails aos administradores ou responsáveis. Este projeto pode ser usado para enviar mensagens de um formulário diretamente para o e-mail do administrador do site.
### 2. Notificações e Alertas
O envio de e-mails pode ser útil para sistemas que precisam notificar usuários ou administradores sobre eventos importantes, como confirmações de cadastro, atualizações de status de pedidos, ou alertas de segurança.
### 3. Automação de E-mails
Empresas podem usar este projeto para configurar automações de envio de e-mails para clientes, como e-mails de boas-vindas, atualizações de status de pedidos, ou promoções personalizadas.
### 4. Sistemas de Recuperação de Senha
Em sistemas de autenticação, como sites de e-commerce ou plataformas de login, este código pode ser usado para enviar e-mails de recuperação de senha ou confirmação de novas senhas.
### 5. Aplicações que Requerem Confirmação por E-mail
O envio de e-mails pode ser utilizado para confirmar ações no sistema, como confirmações de inscrição, ativação de conta, ou verificação de identidade.<br></br>


# Como Usar 
<br></br>
## Requisitos
**PHP 7.4 ou superior**
**Composer**
**Conta de e-mail (Gmail, por exemplo) configurada com acesso SMTP**
**Variáveis de ambiente configuradas para proteger as credenciais**<br></br>

# Passos para Instalar
<br></br>
## Clone o Repositório
### Clone o repositório do projeto para sua máquina local:

```bash
git clone https://github.com/seu-usuario/enviar-email.git
cd enviar-email
Instalar Dependências
```

<br></br>
### Use o Composer para instalar as dependências necessárias:

```bash
composer install
Configuração do Arquivo .env
```
<br></br>

### Crie um arquivo .env na raiz do projeto com as variáveis de ambiente necessárias:

```
MAIL_USERNAME=seu-email@gmail.com
MAIL_PASSWORD=sua-senha-do-app
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_ENCRYPTION=tls
MAIL_TO=destinatario@exemplo.com
```
<br></br>

### Configurar o Servidor SMTP
Certifique-se de que sua conta de e-mail (como o Gmail) tenha acesso ao SMTP ativado. Caso esteja usando o Gmail, você precisará gerar uma senha de aplicativo para autenticação.<br></br>
<br></br>


### Enviar o E-mail

Após a configuração, basta acessar a página PHP que envia o e-mail. O formulário de contato solicitará o nome, assunto e corpo da mensagem, e o e-mail será enviado automaticamente para o endereço especificado no arquivo .env.<br></br>


### Contribuições
Contribuições são bem-vindas! Se você deseja melhorar este projeto, fique à vontade para abrir uma pull request. Certifique-se de que seu código esteja bem documentado e siga as melhores práticas de desenvolvimento.<br></br>

### Licença
Este projeto está licenciado sob a MIT License.<br></br>

# Conclusão

Esse README fornece uma descrição clara do projeto, explica o uso prático do envio de e-mails e oferece detalhes de configuração e implementação para quem deseja usar ou contribuir com o projeto.

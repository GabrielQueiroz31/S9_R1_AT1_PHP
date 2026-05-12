# Formulário de Contato com PHP (S9_R1_AT1)

Formulário HTML simples integrado com PHP para coleta e exibição de dados enviados via método POST.

## Descrição

Este projeto consiste em uma página web com um formulário de contato que captura nome, e-mail e mensagem do usuário. Após o envio, os dados são processados pelo PHP na mesma página e exibidos logo abaixo do formulário.

## Tecnologias Utilizadas

- **HTML5** — estrutura e formulário da página
- **PHP** — processamento dos dados enviados via POST

## Estrutura do Projeto

```
S9_R1_AT1/
└── index.php       # Página principal com formulário e lógica PHP
```

## Funcionalidades

- Formulário com campos de **Nome**, **E-mail** e **Mensagem**
- Envio de dados via método **POST**
- Botão **Limpar** para resetar os campos
- Exibição dos dados submetidos na própria página
- Uso do operador `??` (null coalescing) para evitar erros quando a página é carregada sem envio

## Como Funciona

1. O usuário preenche os campos e clica em **Enviar**
2. O formulário faz uma requisição `POST` para a própria página
3. O PHP lê os valores com `$_POST` e os exibe na tela

```php
$nome  = $_POST["nome"]  ?? "";
$email = $_POST["email"] ?? "";
$msg   = $_POST["msg"]   ?? "";
```

> O operador `??` garante que, caso a variável não exista (primeira carga da página), seja atribuída uma string vazia em vez de gerar um aviso de erro.

### Autor
Gabriel Gomes de Queiroz
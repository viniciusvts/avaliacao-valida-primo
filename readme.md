# Tarefa valida primo
Essa é uma tarefa que avaliará a proeficiência em conceitos basicos da web

Licensed under CC BY 4.0 [Vinicius de Santana](https://github.com/viniciusvts)

## Crie um formulário web
- O arquivo [index.php](index.php) deverá conter um formulário que fará um post em [valida.php](valida.php).
- Esse formulário deverá ter um campo que receberá um número inteiro

## Retorne se um número é primo
- O  arquivo [validaprimo.php](validaprimo.php) deverá conter uma função que recebe um número inteiro e retorna booleano.
- A função deverá está documentada com PHPDoc ex:
```php
/**
 * Descrição da função
 * @param $value - Descrição do parâmetro
 * @return boolean
 */
```
- O  arquivo [valida.php](valida.php) deverá usar a função criada em [validaprimo.php](validaprimo.php) para validar o número recebido

> Checkpoint 1, commit suas alterações, caso queira parar por aqui faça um pull request na branch dev das suas alterações

## Estilize o projeto
Estilize o formulário criado em [index.css](index.css)

> Checkpoint 2, commit suas alterações, caso queira parar por aqui faça um pull request na branch dev das suas alterações

## Utilize ajax
Altere [index.php](index.php)  para fazer a consulta em [validaprimo.php](validaprimo.php) por método ajax, utilize [index.js](index.js) para tal, exiba o resultado em um `alert()`

> Avaliação terminada, commit suas alterações, faça um pull request na branch dev das suas alterações
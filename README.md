# Twitter Feed

[pt-br]

## Docker

* Requisitos: Ter instalado na máquina o docker e o docker-compose
* Caso haja algum serviço na porta 80 o container poderá ter problemas ao subir

```bash
cd docker
docker-compose up --build -d
docker exec -it twitterfeed-php-fpm bash
composer update
```

## Chaves Twitter

* Criar um projeto no http://apps.twitter.com/ para poder utilizar a API.
* Em `src\Controller\Feed.php` alterar as chaves por suas respectivas.

## Regras URL

* Para realizar a pesquisa, basta adicionar o termo (obrigatório), quantidade (opcional, padrão 15 registros) e linguagem (opcional) - http://localhost/feed/**termo**/**quantidade**/**linguagem**
* Ex: http://localhost/feed/**fernandopolis**/**100**/**pt**
* É possível verificar se há mais de um termo no mesmo tweet ou procurar por tweets que contenham pelo menos uma palavra escrita.
* Ex: http://localhost/feed/fernandopolis show OR fef
* Neste caso, todos os tweets deverão ter `fernandopolis` e neles poderão conter `show`, `fef` ou os dois.

[en]

## Docker

* Requirements: docker and docker-compose installed in your machine.
* If there's something running on port 80, the container won't run.

```bash
cd docker
docker-compose up --build -d
docker exec -it twitterfeed-php-fpm bash
composer update
```

## Twitter Keys

* Go to http://apps.twitter.com/ and create a project to use the API.
* Change the keys on `src\Controller\Feed.php`

## URL Rules

* To search, you just need to use http://localhost/feed/**term**/**quantity**/**language** - term (required), quantity (optional, default 15 tweets) and language (optional).
* Ex: http://localhost/feed/**fernandopolis**/**100**/**pt**
* It's possible to search more than one term in the same tweet or verify if some tweet has at least one word of search.
* Ex: http://localhost/feed/fernandopolis show OR fef
* In this case, the tweets must have `fernandopolis`, but some can have `show`, `fef` or both.

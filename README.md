# aula-git

Projeto de exemplo para aula de Git: um modelo PHP simples (`Cidade`) com validações e uma página de demonstração.

## Requisitos

- PHP 7.4+ (recomendado 8.0+ por causa de `declare(strict_types=1)` e tipagem de propriedades)

## Como rodar

Na raiz do repositório:

```bash
php -S localhost:8080 -t public
```

Abra [http://localhost:8080](http://localhost:8080) no navegador.

## Estrutura

- `app/model/Cidade.php` — classe com getters/setters, validação de nome e UF
- `public/index.php` — página que instancia a cidade e exibe os dados

## O que o modelo valida

- **Nome**: não pode ficar vazio após `trim`
- **Estado**: exatamente 2 letras (sigla da UF), normalizada em maiúsculas
- **ID**: só pode ser definido uma vez

# Kouhai
> _"O único lugar onde o sucesso vem antes do trabalho é no dicionário."_
<br> — Stubby Currence

<!-- img -->
<p>
  <img src="https://media.giphy.com/media/l0Iybn1vpbUzeqkqQ/source.gif" align="center" width="600" height="400"/>
</p>
<!-- Img -->

## Descrição

Kouhai é uma API Rest que fará a integração de sites como o Indeed, Glassdoor, Programathor e etc. visando unificar links de vagas de diversos portais para desenvolvedores PHP júniors, economizando o tempo de abrir várias abas em vários sites de vagas, tendo assim todo o catálogo de vagas num só lugar. 

## Recursos

### Catho

#### Descrição

Lista as vagas do portal [Catho](https://www.catho.com.br/)

#### Endpoint
```http
GET /api/catho/list-jobs
Content-type: application/json
```

#### Retorno

```json
{
  "data": [
    {
      "url": "https://www.catho.com.br/vagas/programador-php-junior/18192636",
      "title": "Vaga de Programador PHP Júnior",
      "pay_scale": "De R$ 1.001,00 a R$ 2.000,00",
      "job_updated_at": "2021-05-13T23:59:59Z",
      "description": "Atuar em agência de Publicidade Digital, com programação PHP framework Laravel."
    },
    {
      "url": "https://www.catho.com.br/vagas/programador-php-junior/18615983",
      "title": "Vaga de Programador PHP Júnior",
      "pay_scale": "Até R$ 1.000,00",
      "job_updated_at": "2021-05-05T23:59:59Z",
      "description": "Compor equipe para testes, manutenção e desenvolvimento da aplicação. Desenvolver em PHP orientado a objeto HTML, CSS, Jvascript, SQL e GIT para versionamento. Formado ou…"
    },
    {
      "url": "https://www.catho.com.br/vagas/programador-php-junior/18546803",
      "title": "Vaga de Programador PHP - Júnior",
      "pay_scale": "De R$ 2.001,00 a R$ 3.000,00",
      "job_updated_at": "2021-04-20T23:59:59Z",
      "description": "Um programador PHP Pleno deve dominar a linguagem de programação PHP, deve ter um nível intermediário de programação JavaScript, e noções básicas de HTML e CSS. Deve também ter…"
    }
  ]
}
```
### Programathor

#### Descrição

Lista as vagas do portal [Programathor](https://programathor.com.br/)

#### Endpoint
```http
GET api/programathor/list-jobs
Content-type: application/json
```
#### Retorno
```json
{
  "0": 200,
  "data": [
    {
      "title": "Desenvolvedor(a) Wordpress Full Stack",
      "url": "https://programathor.com.br/jobs/16579-desenvolvedor-a-wordpress-full-stack",
      "job_details": [
        "A&M Solutions - Agência Digital",
        "Remoto",
        "Grande empresa",
        "Até R$1.500",
        "Júnior",
        "PJ",
        "Aceita candidatos de fora",
        "PHP",
        "WordPress",
        "MySQL",
        "CSS",
        "JavaScript",
        "HTML"
      ]
    },
    {
      "title": "Desenvolvedor(a) Laravel JR",
      "url": "https://programathor.com.br/jobs/16540-desenvolvedor-a-laravel-jr",
      "job_details": [
        "A&M Solutions - Agência Digital",
        "Remoto",
        "Grande empresa",
        "Até R$2.000",
        "Júnior",
        "PJ",
        "Aceita candidatos de fora",
        "Git",
        "Laravel",
        "PHP",
        "SQL"
      ]
    }
  ]
}
```

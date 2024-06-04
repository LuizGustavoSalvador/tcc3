
# Projeto TCC - Gamificação em Ambientes Virtuais de Aprendizagem
## Autor: Luiz Gustavo Fontanela Salvador

Este projeto é parte do meu Trabalho de Conclusão de Curso (TCC) e consiste na criação de um ambiente Moodle que possibilite a utilização do plugin AGM utilizando Docker e Docker-compose. O ambiente utiliza as seguintes tecnologias:

- PHP 8.2
- HTML
- CSS
- JavaScript
- Moodle versão 4.3.4
- PostgreSQL 15
- Docker
- Docker-compose
- Imagem Docker: php:8.2-apache

## Requisitos

### Para usuários Linux

1. **Docker**: Se você ainda não tem Docker instalado, siga as instruções [aqui](https://docs.docker.com/engine/install/).
2. **Docker-compose**: Instale o Docker-compose seguindo as instruções [aqui](https://docs.docker.com/compose/install/).

### Para usuários Windows

1. **Docker Desktop**: Faça o download e instale o Docker Desktop através deste [link](https://www.docker.com/products/docker-desktop/).
2. **WSL2**: O Docker Desktop para Windows requer o WSL2. Instale o WSL2 seguindo as instruções [aqui](https://docs.microsoft.com/en-us/windows/wsl/install).

## Passo a Passo para Configuração do Ambiente

### Passo 1: Clone o repositório

Clone este repositório em sua máquina local:

```bash
git clone <url-do-repositorio>
cd <nome-do-repositorio>
```

### Passo 2: Buildar o Container

No diretório raiz do projeto, onde estão localizados o `Dockerfile` e o `docker-compose.yml`, execute o comando:

```bash
docker-compose up --build
```

Este comando construirá o container e iniciará os serviços definidos no `docker-compose.yml`.

### Passo 3: Instalação do Moodle

Após buildar o container e iniciar os serviços, acesse o Moodle através do navegador utilizando o endereço [http://localhost:3333](http://localhost:3333).

1. **Configuração Inicial**: Siga as instruções na tela para configurar o Moodle. Defina o idioma, configure o banco de dados (PostgreSQL 15), e configure o administrador do Moodle.
2. **Criação de Ambiente**: Crie um ambiente (site) no Moodle conforme sua necessidade.
3. **Criação de Curso**: Dentro do ambiente Moodle, crie um novo curso onde o plugin de gamificação será utilizado.

### Passo 4: Instalação e Configuração do Plugin

Após a criação do curso, o plugin de gamificação já estará disponível para configuração e uso dentro do curso criado. Siga as instruções do plugin para configurá-lo conforme os objetivos e abordagem definidos.

## Links Úteis

- [Documentação do Docker](https://docs.docker.com/)
- [Documentação do Docker-compose](https://docs.docker.com/compose/)
- [Instalação do WSL2 no Windows](https://docs.microsoft.com/en-us/windows/wsl/install)

---

Certifique-se de seguir cada passo cuidadosamente para garantir a configuração correta do ambiente Moodle e o funcionamento do plugin AGM.
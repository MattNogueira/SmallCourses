# Docker - Curso de Aprendizado

## Objetivo

Esta pasta visa documentar o aprendizado sobre **Docker**, uma plataforma de containerização que permite empacotar aplicações e suas dependências em containers isolados para execução consistente em qualquer ambiente.

**Referência do curso:** [Link do curso](https://www.udemy.com/course/docker-para-desenvolvedores-com-docker-swarm-e-kubernetes)

---

## Estrutura das Pastas

### 1. `1_IMAGENS_E_CONTAINERS/`

Introdução aos conceitos fundamentais de Docker:
- **Imagens Docker**: Modelos imutáveis que contêm o código, runtime e dependências de uma aplicação
- **Containers**: Instâncias em execução de uma imagem Docker, ambientes isolados e leves
- Criação de Dockerfile para definir instruções de construção da imagem
- Build e execução de containers a partir de imagens
- Exemplo prático: Aplicação Node.js containerizada

### 2. `2_VOLUMES/`

Gerenciamento de dados e persistência em Docker:
- **Volumes**: Mecanismo para persistir dados gerados e utilizados por containers
- Diferentes tipos de volumes (named volumes, bind mounts, tmpfs)
- Compartilhamento de dados entre containers e host
- Exemplo prático: Aplicação PHP com armazenamento de mensagens persistente

### 3. `3_NETWORKS/`

Comunicação entre containers:
- **Networks do Docker**: Permitir que containers se comuniquem entre si
- `1_externa/`: Comunicação pela rede externa/bridge, acesso por IP ou DNS
- `2_host/`: Host network driver - container compartilha a stack de rede do host
- Isolamento de rede e casos de uso para cada tipo de network
- Exemplo prático: Aplicações Python em diferentes modos de networking

### 4. `4_YAML/`

Discussão sobre a sintaxe de YAML:
- **YAML**: Linguagem de marcação de dados legível por humanos
- Estrutura de dados (listas, dicionários, aninhamento)
- Comentários e formatação
- Validação e parsing de YAML
- Exemplo prático: Arquivo YAML com diferentes tipos de dados e estruturas, com código python e pyyaml testando o output

---

## Como Usar

Cada pasta contém exemplos práticos com seus respectivos Dockerfiles e código-fonte. Para executar os exemplos, utilize:

```bash
# Build da imagem
docker build -t nome-da-imagem .

# Execução do container
docker run -d nome-da-imagem
```

Para Docker Compose:

```bash
# Iniciar serviços
docker-compose up -d

# Parar serviços
docker-compose down
```

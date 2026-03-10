<p align="center">
    <img src="https://raw.githubusercontent.com/caio-pellegrini/ensina-mais/refs/heads/main/.github/images/logo-ensina.svg" alt="logo">
</p>

# Ensina+
Ensina+ é uma plataforma educacional digital desenvolvida para os alunos da rede SESI-SP, com o objetivo de melhorar a preparação para vestibulares, promovendo uma experiência personalizada, acessível e integrada.

- [Objetivo](#objetivo)
- [Funcionalidades](#funcionalidades)
- [Demonstração Visual](#demonstração-visual)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Instalação e Configuração](#instalação-e-configuração)
- [Benefícios para a Rede SESI-SP](#benefícios-para-a-rede-sesi-sp)
- [Contribuidores](#contribuidores)
- [Próximos Passos](#próximos-passos)

### Objetivo
Atualmente, muitos alunos do SESI recorrem a plataformas externas para complementar seus estudos. O Ensina+ busca preencher essa lacuna, aproveitando a infraestrutura de alta qualidade e os professores excepcionais do SESI para criar um ambiente digital próprio e inovador.

### Funcionalidades
- **Videoaulas:** Aulas dinâmicas e organizadas por disciplinas.
- **Painel Administrativo:** Gerenciamento eficiente para professores e coordenadores.
- **Fórum de Interação:** Comunicação direta com professores e outros alunos.
- **Correção de Redações:** Ferramenta para prática e feedback estruturado.
- **Acompanhamento Personalizado:** Relatórios de desempenho individualizados.



### Demonstração Visual
Abaixo estão capturas de tela reais da plataforma Ensina+, mostrando algumas de suas principais funcionalidades:

![Página de Login](.github/images/login.jpg)

![Home](.github/images/home.jpg)

![Disciplinas](.github/images/disciplinas.jpg)

![Painel Administrativo](.github/images/admin.jpg)

### Tecnologias Utilizadas

| Camada | Tecnologia | Versão |
|--------|-----------|--------|
| **Back-End** | PHP | ^8.3 |
| **Back-End** | Laravel | ^12.0 |
| **Painel Admin** | Filament | ^3.2 |
| **Autenticação** | Laravel Breeze | ^2.1 |
| **Banco de Dados** | MySQL | 8 |
| **Front-End** | Blade (Laravel) | — |
| **CSS** | TailwindCSS | ^3.4 |
| **JavaScript** | Alpine.js | ^3.14 |
| **Build** | Vite | ^6.2 |
| **Testes** | Pest | ^3.0 |
| **Design** | Figma & Pacote Adobe | — |

### Instalação e Configuração

#### Pré-requisitos
- PHP 8.3+
- Composer
- Node.js 20+ e npm
- MySQL 8

#### Passos

1. **Clone o repositório**
   ```bash
   git clone https://github.com/caio-pellegrini/ensina-mais.git
   cd ensina-mais
   ```

2. **Instale as dependências PHP**
   ```bash
   composer install
   ```

3. **Instale as dependências JavaScript**
   ```bash
   npm install
   ```

4. **Configure o ambiente**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure as variáveis de ambiente** no arquivo `.env`:
   ```dotenv
   DB_DATABASE=ensina_mais
   DB_USERNAME=seu_usuario
   DB_PASSWORD=sua_senha

   # Opcional: chave da API do YouTube para buscar duração dos vídeos
   YOUTUBE_API_KEY=sua_chave_aqui
   ```

6. **Execute as migrações e seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Compile os assets**
   ```bash
   npm run build
   # ou, em desenvolvimento:
   npm run dev
   ```

8. **Inicie o servidor de desenvolvimento**
   ```bash
   php artisan serve
   ```

   Acesse em `http://127.0.0.1:8000`.

#### Usando Docker (opcional)

O projeto inclui um `compose.yaml` com MySQL 8:

```bash
docker compose up -d
```

Em seguida, siga os passos 2–8 acima apontando `DB_HOST=127.0.0.1`.

#### Executando os testes

```bash
php artisan test
# ou
./vendor/bin/pest
```

### Benefícios para a Rede SESI-SP
Em caso de sua adoção oficial, o projeto poderia trazer vários benefícios para a Rede SESI-SP, como:
1. Promoção da inovação e qualidade educacional.
2. Redução da dependência de plataformas externas.
3. Melhor desempenho dos alunos nos vestibulares.
4. Inclusão e acessibilidade no aprendizado digital.

### Contribuidores
O desenvolvimento foi realizado pelos alunos dos cursos *Técnico em Análise e Desenvolvimento de Sistemas* e *Técnico em Multimídia* - CE SESI 227, sendo este o projeto final entregue pelos alunos.

### Próximos passos
- **Expansão:** Incluir mais unidades e turmas do SESI.
- **Inteligência Artificial:** Introdução de IA para personalizar o aprendizado.
- **Gamificação:** Incentivar o engajamento através de desafios e recompensas.
- **Métricas Avançadas:** Melhorar o acompanhamento de professores e coordenadores.

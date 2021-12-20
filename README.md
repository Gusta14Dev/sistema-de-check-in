<h1>Escola de karatê - Kyōryokuna kikku (nome ficticio)</h1> 

Este projeto é um sistema de calendario para uma escola de karatê, no sistema os alunos podem fazer check-in (ou marcar que comparecerá) nas aulas. Serão divididos em dois môdulos sendo eles o painel do administrador e o do aluno.

O administrador poderá:<br>
    -> Ver todas as aulas cadastradas<br>
    -> Incluir nova aula<br>
    -> Editar aulas<br>
    -> Excluir aulas<br>
    -> Ver detalhes de cada aula<br>

O aluno poderá:<br>
    -> Ver aulas do dia atual<br>
    -> Fazer Check-In nas aulas<br>
    -> Ver aulas da semana<br>
    -> Ver aulas que deu Check-In<br>
    -> Cancelar Check-In<br>

As tecnologias utilizados no projeto foram:<br>
    -> PHP 8<br>
    -> Laravel 8<br>
    -> Tailwind CSS<br>
    -> MySQL<br>
    -> Git<br>

Modulos extras utilizados:<br>
    -> Kit Inicial Breeze<br>
    -> Módulo de linguagem Português do Brasil (pt-BR) para Laravel >= 5.6<br>
    -> Sweetalert2<br>

## Requisitos
Para rodar o projeto você precisa ter:<br>
    -> Composer<br>
    -> Node<br>
    -> NPM<br>

## Instalação
Para instalar o projeto faça:

1. Clone o ropositorio atual na sua maquina:<br>

    ```shell
    git clone https://github.com/Gusta14Dev/sistema-de-check-in.git
    ```
    
2. Rode o composer:<br>

    ```shell
    composer install
    ```

3. Compile o Js e o CSS:<br>

    ```shell
    npm install && npm run dev
    ```

4. Rode as Migrations e os Seeder<br>

    ```shell
    php artisan migrate --seed
    ```

5. Entre no sistema com o login de administrador:<br>
        Login: Admin<br>
        Senha: Admin123<br>

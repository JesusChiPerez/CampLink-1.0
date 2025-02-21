# Nombre de la Aplicación

Breve descripción de la aplicación. Explica qué hace la aplicación, su propósito y cualquier información relevante que los desarrolladores deban saber.

## Requisitos Previos

Antes de comenzar, asegúrate de tener instalado lo siguiente en tu máquina:

-   [PHP](https://www.php.net/) (versión 8.0 o superior)
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/) (opcional, si la aplicación usa frontend con npm)
-   [Git](https://git-scm.com/)


## Instalación

Sigue estos pasos para configurar la aplicación en tu entorno local:

1. **Clona el repositorio:**

    ```bash
    git clone https://github.com/sanruicor/
    cd 

    ```
2. **Instala las dependencias de Composer:**

    ```bash
    composer install
    ```
3. **Compia el archivo .env.example y renómbralo a .env:**

    ```bash
    cp .env.example .env
    ```
4. **Genera la clave de la aplicación:**

    ```bash
    php artisan key:generate
    ```
5. **Configura la base de datos en el archivo .env:**

    ```bash
    DB_CONNECTION=sqlite
    ```
6. **Instala las dependencias:**

    ```bash
    npm install
    ```
   
7. **Compila los assets:**

    ```bash
    npm run dev
    ```
8. **Crea la base de datos:**

    ```bash
    php artisan migrate:fresh --seed
    ```
   
9. **Inicia el servidor:**

    ```bash
    php artisan serve
    ```
10. **Visita la aplicación en tu navegador:** [//http://127.0.0.1:8000/](//http://127.0.0.1:8000/)
   
11. **Registra un usuario en la app y haz que sea administrador:**

    ```bash
    php artisan tinker
    ```
    ```bash
    $user = App\Models\User::all()->last()->last();
    $user->forceFill(['admin_since' => now()]);
    $user->save();
    ```
Ya puedes acceder a la aplicación completamente funcional.

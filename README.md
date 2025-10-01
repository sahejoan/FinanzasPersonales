<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# FinanzasPersonales

## Descripción del Proyecto

**FinanzasPersonales** es un sistema de gestión de finanzas personales construido con el framework **Laravel 12**. 

El objetivo principal de esta aplicación es:
* Registrar y categorizar ingresos y egresos.
* Visualizar el estado financiero a través de reportes y gráficos.
* Gestionar presupuestos y metas de ahorro.

## Tecnologías

Este proyecto está construido sobre el framework Laravel, utilizando las siguientes tecnologías clave:

* **Framework:** Laravel (v12)
* **Lenguaje:** PHP
* **Base de Datos:** MySQL
* **Frontend:** Blade, [Especificar Framework CSS/JS, ej: Tailwind CSS, Livewire, Alpine.js]

## Instalación y Configuración

Sigue estos pasos para poner el proyecto en funcionamiento localmente:

1.  **Clonar el repositorio:**
    ```bash
    git clone [https://github.com/sahejoan/FinanzasPersonales.git](https://github.com/sahejoan/FinanzasPersonales.git)
    cd FinanzasPersonales
    ```

2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```

3.  **Configurar el archivo .env:**
    Copia el archivo de ejemplo y genera la clave de la aplicación:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Asegúrate de configurar los datos de tu base de datos en el archivo **`.env`**.*

4.  **Ejecutar migraciones y seeds (opcional):**
    ```bash
    php artisan migrate
    # Si tienes seeds:
    # php artisan db:seed
    ```

5.  **Instalar dependencias de Node (para frontend):**
    ```bash
    npm install
    npm run dev  # O npm run build
    ```

6.  **Iniciar el servidor local de Laravel:**
    ```bash
    php artisan serve
    ```
    La aplicación estará accesible en `http://127.0.0.1:8000`.

## Acerca de Laravel

Laravel es un framework de aplicación web con sintaxis expresiva y elegante.

Las características principales que facilitan el desarrollo son:
* [Enrutamiento (Routing)](https://laravel.com/docs/routing).
* [Eloquent ORM (Base de datos)](https://laravel.com/docs/eloquent).
* [Migraciones de base de datos](https://laravel.com/docs/migrations).
* [Procesamiento de colas (Queues)](https://laravel.com/docs/queues).

---

## Licencia

El framework Laravel es software de código abierto licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT).

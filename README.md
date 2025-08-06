# ThesisHub

Sistema de control de tesis universitarias que centraliza y profesionaliza todos los procesos involucrados, desde el registro inicial hasta la aprobación final de una tesis.

---

# Instrucciones para ejecutar el proyecto

_Requisitos_:

- PHP
- MySQL

## 1. Instalación

Clona o descarga este repositorio.

## 2. Conexión con la base de datos

Configura los datos de conexión en `src/config/db.php`.

## 3. Creación de la base de datos

En la raíz del proyecto (`src/`), ejecuta:

```bash
php db/install.php
```

## 4. Ejecución

Para iniciar el servidor PHP, en la raíz del proyecto ejecuta:

```bash
php -S localhost:1111 -t public
```

## 5. Inicio de sesión

Para acceder al sistema, inicia sesión con las siguientes credenciales:

```bash
> Usuario: student
> Contraseña: tarea4
```

---

> ¡Listo, esos fueron todos los pasos!

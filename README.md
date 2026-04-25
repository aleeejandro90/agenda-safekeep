# 🛡️ SafeKeep Agenda

Agenda profesional con encriptación de datos automática y entorno Docker.

## 🚀 Instalación rápida

1. **Clonar el repo:** `git clone https://github.com/tu-usuario/agenda-safekeep.git`
2. **Copiar el entorno:** `cp .env.example .env`
3. **Levantar Docker:** `docker compose up -d --build`
4. **Instalar dependencias:** `docker compose exec laravel.test composer install`
5. **Generar llave de seguridad:** `docker compose exec laravel.test php artisan key:generate`
6. **Ejecutar tablas:** `docker compose exec laravel.test php artisan migrate`

Listo en: `http://localhost:8080`
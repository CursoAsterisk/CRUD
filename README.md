# CRUD PARA CURSO ASTERISK AVANZADO

## Instalación 

Ingresar a la carpeta ``/var/www/html/`` y descargar:

```bash
git clone https://github.com/CursoAsterisk/CRUD.git
mv CRUD aulautil
cd aulautil
```

Copiar el backup SQL

```bash
mv backup.sql /root/
```

Necesitamos subir la base de datos a mysql, me gusta hacerlo con el mismo scrip usando el comando source dentro de mysql:

Ingresamos a MySQL con el comando mysql -p y dentro colocamos

```bash
source /root/backup.sql
```

Luego ingresar `http://localhost/aulautil/index.php`

`Ingresar la IP`

### By: Gian Diego Javes



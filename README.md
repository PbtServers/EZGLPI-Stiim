# EZGLPI-Stiim
Con esta herramienta se pueden crear incidèncias en el glpi del STIIM de manera ràpida, senzilla y eficiente.

# CONTACTO
Para contactarnos entra al discord <br>
[![Unete a discord]()](https://discord.gg/mH8aREb)

# NECESIDADES
Es necessario tener un servidor con el Apache instalado, y una instalación del glpi hecha. <br>
Para instal·lar el glpi se puede usar el siguiente script: <br>
[![GLPI Installation](https://raw.githubusercontent.com/Bielpg04/Scripts/main/Ver.png)](https://github.com/Bielpg04/Scripts)

# COMO USARLO
Antes de nada hay que tener instalado el glpi (usar el script de arriba), IMPORTANTE: mirar que el glpi se encuentra en /var/www/html/glpi. <br>
También hay que tener configurado el Apache2 con la siguiente configuración: <br>
Primero, ir a /etc/apache2/sites-available/000-default.conf y pegar la siguiente configuración
```bash
<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and 
        # port t$# vim: syntax=apache ts=4 sw=4 sts=4 sr noet the server 
        # uses to identify itself. This is used when creating 
        # redirection URLs. In the context of virtual hosts, the 
        # ServerName specifies what hostname must appear in the 
        # request's Host: header to match this virtual host. For the 
        # default virtual host (this file) this value is not decisive as 
        # it is used as a last resort host regardless. However, you must 
        # set it for any further virtual host explicitly.
        ServerName ezglpi.stiim.com
                                                                                
        ServerAdmin webmaster@localhost
	DocumentRoot /ezglpi
                                                                                
        # Available loglevels: trace8, ..., trace1, debug, info, notice, 
        # warn, error, crit, alert, emerg. It is also possible to 
        # configure the loglevel for particular modules, e.g.
        #LogLevel info ssl:warn
                                                                                
        ErrorLog ${APACHE_LOG_DIR}/error.log 
        CustomLog ${APACHE_LOG_DIR}/access.log combined
                                                                                
        # For most configuration files from conf-available/, which are 
        # enabled or disabled at a global level, it is possible to 
        # include a line for only one particular virtual host. For 
        # example the following line enables the CGI configuration for 
        # this host only after it has been globally disabled with 
        # "a2disconf".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>
```

Hay que crear un DNS con el nombre que queramos, pero ese nombre es el "ServerName" del archivo de arriba. 

Hay que poner todos los archivos de este repositorio en una carpeta del servidor que se llame "ezglpi". Esta carpeta tiene que estar situada en la raíz.
Asi que el comando para acceder a ella como root va a ser

```bash
cd /
mkdir ezglpi
cd /ezglpi/
```

Dentro de esta carpeta habrà que crear otra carpeta llamada "temp", que es donde se van a crear las incidèncias temporalmente mientras se añaden a la base de datos. Para crear esta carpeta usaremos el siguiente comando:

```bash
mkdir /ezglpi/temp
```
Ahora hay que darle permisos a las carpetas, hay que darle permiso al usuario www-data, esribiremos el siguiente comando:

```bash
chown root:www-data -R /ezglpi
chmod 775 -R /ezglpi
```

Por último, hay que crear una contraseña de API en el glpi, dentro del GLPI, hay que ir a "Configuración --> General --> API" y una vez auí clicamos la opción de full access from localhost.

<img src="https://raw.githubusercontent.com/Bielpg04/IMG/main/localhs.png"></img>

Una vez dentro hay que poner exactamente esta situación (siempre y cuando las IPs que dal el dhcp sean de ese rango de IPs, sino se cambian las IPS y ya esta(. IMPORTANTE: poner exactamente esa contraseña, sino no funcionará.
<img src="https://raw.githubusercontent.com/Bielpg04/IMG/main/apitoken.png" ></img>

Para acabar hacemos 
```bash
systemctl restart apache2
```

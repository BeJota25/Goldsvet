<h2><span style="color:#ff0000"><strong>&nbsp;Opensource-casino-v10.1 ENERO 2025</strong></span></h2> 
<p><strong>Script de casino de tragamonedas de código abierto (anteriormente Goldsvet) v10.3</strong></p>El script ha sido modificado en su parte gráfica y se han incluido nuevos modulos de slider y botoneras.


 <p><span style="color:#ff0000"><strong>El lanzamiento de la versión V10.1 de enero de 2024 agrega compatibilidad con 
 Laravel 10 y PHP 8.1+, además de ampliar las funciones de Múltiples Niveles de Tiendas</strong></span></p>
  <p><span style="color:#ff0000"><strong>v10.1 ahora admite TIENDAS [también conocidas como agentes/múltiples vendedores]</strong>
  </span></p> 
  
  <br />Demo y configuración de Open Source v10 <br />
</strong></span></p>

<p><span style="color:#ff0000"><strong>Correcciones múltiples, base de datos unificada en una sola v10</strong></span>
<br /> Se ha agregado y activado el usuario de DEMO para jugar juegos de demostración<br /> 
Se agregaron 100 juegos, alcanzando un total de 1200 juegos ahora.</p>
 <p><span style="color:#ff0000">
<p>Esta es una aplicación de casino basada en Laravel. Debes descargar los paquetes de juegos para que funcione.</p> 

<p>DEMO: <a href="HTTPS://leviatan.bet">HTTPS://leviatan.bet</a>&nbsp;<br />
<p><span style="color:#339966">DESCARGO DE RESPONSABILIDAD DEL DEMO: el demo siempre está en actualización, pruebas y reinicios 
de base de datos, no lo uses como un sitio web estable.</span></p>

<p>1100 juegos en total hasta hoy</p> 

<h2>Instrucciones de Instalación</h2> 
<p>Este documento muestra un ejemplo de configuración en un servidor cPanel, el cual se puede replicar en otros entornos.</p>
<ul> <li>Configura tu servidor con Apache, MySQL, PHP <s>7.1-7.4</s>, PHP 8+, Composer, Laravel 10, Node.js 16 y PM2.</li> 
<li>Forzar el SSL en el dominio.</li> 
<li>Crear un nuevo correo electrónico y contraseña.</li> 
<li>Crear una nueva base de datos y conceder todos los permisos.</li>
<li>Importar el archivo SQL ubicado en <code>/v10.sql</code></li>
<li>Forzar el SSL en el dominio nuevamente.</li> 
<li>Generar certificado SSL CRT, KEY y BUNDLE. Copiar los contenidos de CRT/KEY/BUNDLE a los archivos en la carpeta 
<code>CASINO/PTWEBSOCKET/SSL/</code></li> <li>Descomprimir los archivos 
<code>casino.zip</code> y <code>public_html.zip</code> en: <ul> <li><code>public_html</code> → Directorio público.</li>
<li><code>casino</code> → Ubicado fuera del directorio público por seguridad.Esta version contiene la carpeta "casino" directamente detro depublic_html.</li> 
</ul> </li> <li>no modificar <code>index.php</code> y <code>.htaccess</code> 
si decides dejar la carpeta <code>casino</code> dentro de <code>public_html</code>.</li>
</ul> <h2>Instrucciones Específicas para SSL</h2> 
<p>Eliminar cualquier SSL autofirmado y generar/instalar un certificado de Let's Encrypt.</p>
<p>Ubicar los archivos SSL en la carpeta <code>casino/PTWebSocket/ssl</code> y reemplazarlos.</p> 
<h2>Ediciones de Archivos</h2> <p>Modificar los siguientes archivos según tu configuración:</p> 
<ul> <li><code>casino/.env</code> (dominio, base de datos, usuario/contraseña, email).</li>
<li><code>casino/config/app.php</code> (línea 65 para la URL).</li>
<li><code>casino/public/</code> (archivos de socket, cambiar dominio/puertos si es necesario).</li> 
</ul> <h2>Descarga de Juegos</h2> 
Telegram: @BeJotaGoldsvet
<p>Son mas de 40 Gb de Juegos. El 100 % de ellos funcionan si las configuraciones son correctas en los sockets y si los puertos estan abiertos
en el firewall.<p>  
<h2>Comandos PM2</h2> 
<p>Ejecuta los siguientes comandos desde dentro de la carpeta <code>PTWEBSOCKET</code>:</p> 
<p><strong>pm2 start Arcade.js --watch</strong></p> <p><strong>pm2 start Server.js --watch</strong></p>
<p><strong>pm2 start Slots.js --watch</strong></p> <p>O para ejecutarlos todos en un solo comando:</p> 
<p><strong>pm2 start Arcade.js --watch &amp;&amp; pm2 start Server.js --watch &amp;&amp; pm2 start Slots.js --watch</strong></p>
<h2>Solución de Problemas</h2> 
<p>Si Composer/Artisan no se ejecutó correctamente, limpia caché con:</p> 
<p><code>php artisan cache:clear &amp;&amp; php artisan view:clear &amp;&amp; php artisan config:clear &amp;&amp; php artisan event:clear &amp;&amp; php artisan route:clear</code></p> 
<h2>Solución de Problemas con URLs</h2> 
<p>Si obtienes un error 404, verifica que el archivo <code>.htaccess</code> se haya generado correctamente.</p>
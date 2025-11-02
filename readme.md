    1. Crear un repositorio desde cero, con una rama main que tenga el esqueleto de carpetas como van a quedar distribuidas al final.
    2. Cada uno crea una rama con su nombre. Si necesita crear carpetas o archivos temporales para probar funcionalidades, lo hará en su rama. Al final, debe quedar la misma estructura de carpetas que en main (a menos que se sugieran cambios óptimos, sobre todo el back end que no conozco del todo). Después cada uno mergea lo que le corresponda.
Front end:
    • Facundo Torres: Panel e historial de compras
    • Evelyn Franco: Perfil y eliminación de cuenta
    • Darío: Login
    • Víctor: Registro
    • Facundo: Recuperación de contraseña
Les voy a pasar a cada uno cómo debe quedar la vista para que se guíen, respetando los botones y estructura como en la foto. También les voy a pasar la paleta de colores del proyecto. Voy a crear una carpeta de imágenes (con el logo, las ofertas del panel que voy a usar yo, y si alcanza el tiempo, los productos para la compra).
Recuerden: debe ser una estructura HTML dentro de un .php, con su CSS respectivo en un .css. Una vez que esté completo, coordinan conmigo y hacemos las media querys con las medidas que ya tengo guardadas para la responsividad y el JavaScript para los detalles mínimos. Si necesitan ayuda, no duden en consultarme, voy a estar a disposición para lo que no entiendan.
Back end:
Iván y Manu se encargan de las validaciones, conexiones con la base de datos, la base de datos con las tablas necesarias y de integrar la API para el correo electrónico.
a. Validar el login
b. Validar que no se registre un usuario existente
c. En caso de crear un usuario, guardarlo
d. Si se cambia la contraseña por recuperación, validar que el correo exista, validar el código de Brevo y actualizar la contraseña si todo es correcto
e. En el perfil, actualizar los datos si se modifican y, si el usuario elimina la cuenta, darla de baja en la base de datos
f. En el historial, traer las compras desde la base de datos
g. En la compra, traer los productos y todas las funcionalidades
    3. Una vez estén todas las vistas, modelos y controladores, se integran a main. Luego se agrega en las vistas el PHP necesario (por ejemplo, mostrar errores en el login si la contraseña es incorrecta, etc.). Además, conectar todos los formularios y vistas con el back end para la navegación, validaciones y modificaciones.
    4. Una vez que la app esté funcionando y testeada, vamos a revisar archivo por archivo para hacer la documentación, así cada uno puede estudiar su parte y entender las de los demás el día de la presentación.
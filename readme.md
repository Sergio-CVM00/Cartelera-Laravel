RESTRICCIONES

1. Para reservar hay que iniciar sesion
    1.a Los usuarios están creados a partir de Auth de Laravel

2. Duplicacion de datos 
    2.a Pueden haber 2+ peliculas iguales, pero tendran ID distinto
    2.b Pueden haber 2+ sesiones iguales, pero tendran ID distinto
    2.c Pueden haber 2+ entradas iguales, pero tendran ID distinto

3. Un usuario puede tener tantas entradas como quiera de cada sesión

4. El aforo de las salas no se tiene en cuenta. Hay entradas ilimitadas para una sesión

5. En un mismo día pueden haber varias sesiones

6. No se tiene en cuenta el solapamiento de los horarios en las salas

------------------

FUTURAS MEJORAS:

1. Poder descargar tus entradas usando DomPDF

2. Sistema de pago / cartera

3. Mostrar la hora y la sala en la visualización de tus entradas

4. Selección de butaca dentro de la sala en la reserva

5. Implementar el límite establecido por el aforo de la sala 
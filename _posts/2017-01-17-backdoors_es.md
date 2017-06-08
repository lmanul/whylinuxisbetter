---
identifier: backdoors
category: es
title: "Sin puertas traseras en tu software."
---

La diferencia entre el software de “código cerrado” (propietario) y el de “código abierto” (¿cómo adivinar?) es que su “código” está abierto. Eh, bueno, ¿por qué me importa? Bien, el “código” o “código fuente” es como la <b>receta</b> secreta de cada software, como la receta de un pastel. Cuando compras un pastel, no hay manera de que tú puedas averiguar la receta exacta (aunque puedes adivinar un poquito, “tiene un poco de coco rallado aquí”). Sí la pastelería proporcionara la receta de su super exitoso pastel de queso, pronto quebraría por que la gente lo hornearía por si mismos en su casa y dejaría de comprarlo. Así mismo, Microsoft no proporciona la receta, o “código fuente” de su software como Windows y con razón, por que es con lo que hacen su dinero.

El problema es que pueden poner <i>cualquier cosa que quieran</i> en su receta, sin nuestro conocimiento. Si ellos quieren agregar un poquito de código diciendo: “cada día 12 del mes, si el ordenador está en línea, crear una lista de todos los archivos que se han descargado en este ordenador desde el último mes y envíala de regreso a Microsoft a través de la red”. Microsoft probablemente no haga esto, pero <i>¿cómo lo puedes saber</i> si todo está cerrado, invisible, secreto?.

Hace poco tiempo (durante octubre de 2008) muchos de los usuarios chinos de Windows (la mayoría compró copias pirateadas de Windows) vieron que algo extraño pasaba con su ordenador: cada hora, su pantalla se tornaba negra por unos segundos, nada que realmente te impida trabajar, pero puede hacer que fácilmente te desesperes. Microsoft agregó este pedacito de código (como un ingrediente a la receta) diciendo “si es detectado como una copia pirateada de Windows, haz la pantalla negra por unos segundos, cada hora”. Ahora el punto no es que el software fue pirateado: la piratería de software está
mal. El punto es que estos usuarios obtuvieron una actualización automática para Windows (las actualizaciones usualmente corrigen errores y agregan nuevas características) sin el conocimiento de que esto afectaría su sistema. Nadie sabia.

Cambiar el código fuente del software de código abierto, es un proceso mucho más abierto. Por definición, todas las recetas son públicas. Esto no es tan importante para tí, ya que no serás capaz de entender el código de todos modos, pero la gente que lo entiende, puede leerlo y hablarlo. A menudo lo hacen. Cada cierto tiempo, alguien quiere cambiar el código fuente y todos los demás desarrolladores pueden ver el cambio (“oye, ¿por qué agregaste este código para espiar lo que escribe el usuario con el teclado?, ¿te has vuelto loco?”). E incluso si todo el equipo de mantenedores de alguna pieza de software se volviera loco y empezara a agregar características mata-perritos por todo el código fuente, alguien fuera del equipo, puede tomar todo el código, remover todos los bits malvados, crear toda una nueva versión de él y dejar saber al mundo la diferencia. <i>Es abierto.</i>

Esta es la razón por la que puedes estar seguro que el software de código abierto no hace cosas malas a tus espaldas: la comunidad mantiene un ojo muy cerca de todas las recetas.





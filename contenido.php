<!--En este archivo vamos a poner todo el contenido de la pagina, que va hacer las imagenes con su descripcion-->
    <?php 

	function contenido(){
		$datos=array();

		$datos[0]="img/wendigo.jpg"."||". // Imagen
				  "Wendigo"."||". //Nombre
				  "
                  El Wendigo es descrito como un ser raquítico, hasta el punto de inanición, su piel esta tensada a lo largo de su cuerpo ajustándose a sus huesos. El color de su tez es similar a las cenizas de la muerte, y sus ojos parecen estar hundidos en sus cuencas, donde deberían estar sus labios ahora solo hay vestigios de piel y sangre, sucio y apestoso el Wendigo tiene ampollas en su piel y exude un olor de descomposición, a muerte y corrupción."; //Informacion de la imagen

		$datos[1]="img/Rusalka.jpg"."||".
				  "Rusalka"."||".
				  "En la mitología eslava existen unos espíritus femeninos del agua llamados rusalkas, los cuales habitan en ríos, lagos y, a veces, zonas costeras. Por lo general, se las describe como mujeres hermosas de piel nívea y larga melena verde. Sus ojos son completamente blancos, si es que en ellos no arde un intenso fuego del mismo color que su pelo. Sus ropajes suelen consistir en una túnica blanca o en escuetos vestidos confeccionados con hojas del bosque.";

		$datos[2]="img/Basilisco.jpg"."||".
				  "Basilisco"."||".
				  "El basilisco o facilisco (Griego: βασιλίσκος basilískos, (pequeño rey); latín: regulos) es una especie de serpiente que, según Plinio y otros autores, se creía en los desiertos de África.
                  Se consideraba el rey de las serpientes y podía convertir en piedra con una sola mirada. Según Plinio el viejo en su Historia natural, el basilisco de Cirene era una pequeña serpiente con no más de 12 dedos de largo y tan venenosa que deja un rastro de veneno mortal por donde pasa.
";

		$datos[3]="img/Cockatriz.jpg"."||".
				  "Cocatriz"."||".
				  "La cocatriz es una bestia mítica, siendo básicamente un dragón bípedo con cabeza de gallo. Descrito por Laurence Breiner como (un ornamento en el drama y poesía de los Isabelinos), ocupó un lugar muy destacado durante siglos en el mito y pensamiento inglés.";

		$datos[4]="img/Codrille.jpg"."||".
				  "Codrille"."||".
				  "El Codrille, Cocadrille o Codrille es una variedad de basilisco o dragón nativo del centro de Francia, en particular Berry, Maine, Poitou, Sologne y Vend é e. Combina características de basiliscos y vouivres pero sin los aspectos redentores de ninguno de ellos.";
        
        $datos[5]="img/Addanc.jpg"."||". 
				  "Addanc"."||".
				  "El Afanc (en galés, pronunciando la f como la v en inglés), también llamado addanc, addane, avanc, abhac o abac, es un monstruo de lago de la mitología galesa que también aparece en el folklore celta y británico. Su descripción exacta varía; es descrito alternativamente como un cocodrilo, un castor o una criatura parecida a un enano,  y a veces se dice que es un demonio; del mismo modo, varia el lago en el cual el Afanc viviría, hay quienes dicen que vive en el Llyn Llion, Llyn Barfog, cerca del Brynberian Bridge, o en Llyn yr Afanc, nombrado así por la criatura misma, Cerca del pueblo de Betws y Coed, del condado de Conwy, en Caernarfonshire, País de Gales del Norte.";
        
        $datos[6]="img/Ahuizotl.jpg"."||".
				  "Ahuizotl"."||".
				  "Según la mitología Mexica, el Ahuízotl era un temible monstruo acuático de la mitología mexica. Sorprendentemente, las crónicas informan que tenía el aspecto general de un coyote y también su tamaño. Pero aunque no tuviese las enormes dimensiones que suelen atribuírse a un monstruo temible, su ataque resultaba invariablemente letal.";
        
        $datos[7]="img/Qalupalik.jpg"."||".
				  "Qalupalik"."||".
				  "El Qalupalik es una criatura de la mitología Inuit. Este ser vive en el mar y tiene apariencia humana, de pelo largo, piel verde y largas uñas. Según el mito, el qalupaliks lleva un amautik (una bolsa con la que los inuit transportan a sus hijos) con el que secuestra a los bebés y niños que se portan mal y desobedecen a sus padres. Con esta historia evitan que los niños vaguen solos, no sea que el qalupalik se los lleve bajo el agua en su amautik y se los quede para siempre. Este ser siempre hace un zumbido distintivo que se puede escuchar antes de que aparezca.";
        
         $datos[8]="img/Catoblepas.jpg"."||".
				  "Catoblepas"."||".
				  "El catoblepas, también conocido como catóblepon o catoblepa (griego: καταβλέπω, katablépō; «mirar hacia abajo»), es una criatura cuadrúpeda similar a un toro pero con una cabeza desproporcionadamente grande y pesada, lo que le obligaba a mirar siempre hacia abajo, de ahí el origen de su nombre. Una larga melena cubre sus ojos, que son rojos y están inyectados en sangre. Si llegara a levantar la mirada sería mortal, ya que cualquiera que mirara a sus ojos moriría inmediatamente. Su aliento también era peligroso, pues se alimentaba principalmente de plantas venenosas. A veces se le representa con el lomo cubierto de escamas o duras cerdas. Este animal fantástico podría estar basado en el";
        
         $datos[9]="img/Gulon.jpg"."||".
				  "Gulon"."||".
				  "El Gulon(Gula Gula), también conocido como Jerff en Suecia y Vielfras en Alemania, es una criatura de las leyendas escandinavas. Tiene cuerpo de perro, cara y garras de felino y cola de zorro. Lo más impresionante de esta criatura es que nunca se sacia: se alimenta de cualquier cosa. Sería pariente del glotón. Vive en los bosques, donde la comida prolifera. El Gulon está frecuentemente asociado con la gula, o utilizado como un símbolo de la gula, debido a sus extraños hábitos alimenticios. Cuentan que su sangre posee propiedades afrodisíacas y que acostumbraran a servirla con miel en los matrimonios.";
        
         $datos[10]="img/Nian.jpg"."||".
				  "Nian "."||".
				  "El Kelpie, o caballo de agua, es el nombre que recibe en Escocia un espíritu cambiaformas ligado a lagos y cuerpos de agua. Es común que adopte la forma de un caballo, pero también puede aparecer con forma humana, aunque algunas historias cuentan que aun así mantendría sus cascos. Este ser servía como asustaniños, para mantener a los más pequeños lejos de los tramos peligrosos del agua y advirtiendo a las mujeres jóvenes de que deben desconfiar de los extraños bien parecidos.";
        
          $datos[11]="img/Kelpie.png"."||".
				  "Kelpie "."||".
				  "Una antigua leyenda china cuenta la historia de un monstruo carnívoro llamado Nian, muy fuerte, con una gran cabeza y cuernos afilados. Nian vive en las profundidades del mar durante todo el año, pero cada víspera del Año Nuevo chino sube a la tierra para devorar el ganado y a los seres humanos que encuentra a su paso. Por tanto, todos los chinos, los habitantes de los pequeños pueblos que viven cerca del mar, con la llegada del Año Nuevo chino, corren para refugiarse de Nian.

";
        
		return $datos; // retorna los datos
	}

 ?>
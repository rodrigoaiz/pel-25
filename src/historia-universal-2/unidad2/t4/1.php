<?php
include '../../../config.php';
include PATH_INCLUDE . 'TemplatePages.php';
include PATH_INCLUDE . 'ActividadIframe.php';
include PATH_INCLUDE . 'Videos.php';
include PATH_INCLUDE . 'ImagenPie.php';
include PATH_INCLUDE . 'ImagenFullPleca.php';
$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$menuAsignaturaPath = getMenuAsignaturaPath($urlPath);
ob_start();
?>
<section>
  <h2>Introducción</h2>
  <p>Te damos la bienvenida al cuarto aprendizaje de la segunda unidad. En esta ocasión analizarás las principales características económicas, políticas y sociales de América Latina durante la primera mitad del siglo XX. También analizarás la relación de América Latina con los Estados Unidos durante el mismo periodo.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-siqueiros.webp','David A. Siqueiros Detalle del mural “La nueva democracia”. Imagen de Xenophon.', 'https://commons.wikimedia.org/wiki/File:Palacio_de_Bellas_Artes_-_Mural_La_Nueva_Democracia_Siqueiros_2.jpg','Wikimedia Commons.');
  ?>
  </div>
  <h3>Economía en América Latina y su inserción en la economía mundial</h3>  
  <p>Durante la primera mitad del siglo XX, América Latina experimentó importantes cambios en su economía. Entre estos tenemos como el principal la inserción a la economía mundial. Sin embargo, este fenómeno presentó características particulares que debemos conocer. Durante las primeras décadas del siglo XX, varias naciones de América Latina aún estaban bajo el dominio de las potencias coloniales europeas, como España, Portugal, Francia y el Reino Unido. Estas potencias ejercían una influencia significativa sobre la economía de la región.</p>
  <p>Durante la Primera Guerra Mundial, la demanda de productos latinoamericanos aumentó debido a la interrupción de los suministros de Europa, lo que resultó en un aumento de los precios de las exportaciones y un auge económico en la región.</p>
  <p>En ese período, la mayoría de los países de América Latina se basaban en un modelo de desarrollo primario-exportador, caracterizado por la especialización en la producción y exportación de materias primas y productos agrícolas. Estos países dependían en gran medida de los ingresos generados por la exportación de productos básicos para impulsar su economía y obtener divisas extranjeras. Algunos productos clave exportados por los países latinoamericanos incluían el café (Brasil, Colombia), el cacao (Ecuador, Costa Rica), el azúcar (Cuba, República Dominicana), los productos agrícolas (Argentina, Uruguay) y los minerales (México, Chile, Perú). Estos productos tenían una demanda creciente en los mercados internacionales y representaban una parte significativa de los ingresos de los países latinoamericanos.</p>
  
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-cafe.webp','Planta de Café.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Coffee_beans_3.jpg/250px-Coffee_beans_3.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Sin embargo, este modelo de desarrollo también tenía sus desafíos y limitaciones, pues los países estaban sujetos a la volatilidad de los precios internacionales. Además, este modelo fomentaba una estructura económica desigual y dependiente. La mayoría de los ingresos se generaban en los sectores primarios, mientras que la industrialización y la diversificación económica se veían limitadas. Esta dependencia de las exportaciones de materias primas también significaba que los países latinoamericanos tenían un menor control sobre su economía y estaban expuestos a la influencia de las potencias coloniales y las economías desarrolladas.</p>
  <p>A pesar de los periodos de crecimiento económico, América Latina también enfrentó varias crisis. La Gran Depresión de la década de 1930 tuvo un impacto devastador en la región, causando una caída en los precios de las exportaciones, un aumento del desempleo y la disminución de las inversiones extranjeras.</p>
  <p>A partir de esta década, algunos países comenzaron a implementar políticas de industrialización sustitutiva de importaciones. Esto implicaba fomentar el crecimiento de la industria nacional para reducir la dependencia de las importaciones de bienes manufacturados y promover el desarrollo económico.</p>
  <p>Este enfoque de industrialización se conoce como "sustitución de importaciones". La idea principal era fomentar la producción interna de bienes que antes eran importados, con el objetivo de reemplazarlos gradualmente y fortalecer la economía nacional. Esto implicaba la creación y protección de industrias locales mediante medidas como aranceles protectores, subsidios, regulaciones y control estatal. Algunos países que implementaron políticas de sustitución de importaciones fueron Brasil, México, Argentina y Chile. Estos países se centraron en el desarrollo de industrias manufactureras, como la producción de textiles, alimentos procesados, productos químicos, maquinaria y bienes de consumo duraderos.</p>
  <p>Revisa el siguiente vídeo donde se amplía más la idea de la sustitución de importaciones y su relación con el llamado “milagro mexicano”:</p>
  <?php
  renderVideoIframe('GdL6jIcqBtw', 'El milagro mexicano y el desarrollo estabilizador');
  ?>
  <p>La industrialización incipiente tuvo varios efectos en la economía latinoamericana. Ayudó a impulsar el crecimiento económico. La expansión de la industria generó empleo, aumentó la producción interna y contribuyó al desarrollo de infraestructuras, como carreteras, puertos y centrales eléctricas.</p>
  <p>También permitió una mayor diversificación de la economía. En lugar de depender únicamente de la exportación de productos primarios, los países latinoamericanos comenzaron a producir bienes manufacturados para el consumo interno y, en algunos casos, para la exportación. Esto impulsó la formación de un mercado interno más robusto. La creciente clase media y la urbanización contribuyeron a un aumento de la demanda de bienes de consumo, lo que a su vez estimuló la producción y la inversión.</p>
  <p>Aunque la industrialización incipiente tuvo efectos positivos, también enfrentó desafíos. La falta de experiencia y tecnología en la producción industrial, así como la competencia con productos extranjeros más baratos y de mayor calidad, supusieron obstáculos para el desarrollo de una industria sólida.</p>
  <p>Durante esta época, varios países de América Latina llevaron a cabo procesos de nacionalización de los recursos naturales, especialmente en la industria del petróleo y la minería. Estas medidas buscaban aumentar el control estatal sobre los recursos y garantizar una mayor participación de los beneficios económicos. A medida que avanzaba la primera mitad del siglo XX, América Latina comenzó a fortalecer la cooperación y la integración regional. Se crearon organismos como la Comisión Económica para América Latina (CEPAL) en 1948, con el objetivo de promover el desarrollo económico y social en la región.</p>
    <?php ob_start(); ?>
  <p>Hagamos ahora una pausa para resolver el siguiente reto y afianzar nuestros conocimientos.</p>
  <?php
  $ActividadContent = ob_get_clean();
  renderActividad('u2t4a1', "Economía en América Latina Siglo XX", $ActividadContent);
  ?>
  <p>La relación económica entre América Latina y Estados Unidos fue significativa y tuvo un impacto importante en la región. Estados Unidos desempeñó un papel importante como inversor y proveedor de financiamiento para varios países latinoamericanos. Las empresas estadounidenses invirtieron en sectores clave como la agricultura, la minería, la infraestructura y la industria. Además, los bancos estadounidenses proporcionaron préstamos y financiamiento para proyectos de desarrollo en la región. América Latina fue un importante mercado para las exportaciones estadounidenses, y Estados Unidos fue un destino clave para las exportaciones latinoamericanas. Los países latinoamericanos exportaban productos primarios, como alimentos, materias primas y minerales, a Estados Unidos, mientras que importaban bienes manufacturados, maquinaria y tecnología de ese país.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-carga.webp','Barco cargando contenedores para su exportación. Imagen de ImagePerson.', 'https://commons.wikimedia.org/wiki/File:Hapag-Lloyd_Container_Ship_Tokyo_Express_in_Colon_Panama_2016_6070.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>Durante este período, Estados Unidos implementó políticas comerciales que afectaron a América Latina. En algunos casos, se impusieron aranceles proteccionistas sobre ciertos productos latinoamericanos para proteger la industria estadounidense. Esto a menudo afectaba a las exportaciones latinoamericanas y generaba desafíos para los países de la región.En algunos casos, Estados Unidos intervino en asuntos políticos y económicos de los países latinoamericanos para proteger sus intereses. Estados Unidos intervino militarmente en países como México, Nicaragua, República Dominicana y otros, con el objetivo de salvaguardar sus intereses económicos y políticos.</p>
  <p>La relación económica entre América Latina y Estados Unidos a menudo generaba una relación de dependencia económica. Los países latinoamericanos dependían de la demanda y los precios de los productos que exportaban a Estados Unidos, así como de la financiación y las inversiones estadounidenses. Esta dependencia podía exponer a los países latinoamericanos a los cambios en la economía y las políticas de Estados Unidos.</p>
  <div class="mx-auto max-w-md">
  <?php
  renderImage('hu2-u2-eua.webp','Estados Unidos: un importante inversor en América Latina. Imagen de Kadellar. ', 'https://commons.wikimedia.org/wiki/File:Wall_Street_-_New_York_Stock_Exchange.jpg','Wikimedia Commons.');
  ?>
  </div>
  <p>La Segunda Guerra Mundial tuvo un gran impacto en América Latina. Muchos países europeos vieron interrumpida su capacidad de producción y se generó una mayor demanda de productos de América Latina. Esto benefició a los países de la región, ya que las exportaciones de materias primas, alimentos y otros productos aumentaron para satisfacer las necesidades de los países en conflicto. Estados Unidos y otros países aliados aumentaron su inversión en América Latina para asegurar el suministro de materias primas estratégicas y apoyar la producción de bienes necesarios para la guerra. Esto condujo a un aumento en la inversión extranjera en sectores como la minería, la industria manufacturera y la infraestructura.</p>
  <p>La Segunda Guerra Mundial consolidó la posición de Estados Unidos como una potencia mundial y aumentó su influencia en América Latina. El apoyo económico y militar brindado por Estados Unidos durante la guerra fortaleció sus lazos con los países de la región y estableció una mayor dependencia. Algunos países se beneficiaron económicamente, mientras que otros experimentaron dificultades debido a la interrupción del comercio y los conflictos internos. Además, la guerra sentó las bases para cambios económicos y políticos en la región, que tuvieron implicaciones a largo plazo en su desarrollo.</p>

</section>
<?php
$content = ob_get_clean();
renderTemplatePage($menuAsignaturaPath, $content);
?>

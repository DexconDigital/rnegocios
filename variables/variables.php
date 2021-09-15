<?php

$nombre_inmobiliaria = "Inmobiliaria Rio Negocios del Sur";

//logo empresa
$logo_empresa = [
	$color =[
		"src" => "images/logo.png",
		"alt" => "Logo Inmobiliaria Rio Negocios del Sur"
	],
];

// redes sociales
$redes_sociales = [
	"facebook" => [
		"link" => "https://www.facebook.com/RioNegociosdelSur/",
		"icono" => "fab fa-facebook-f",
		"imagen" => "images/facebook.png"
	],
	"instagram" => [
		"link" => "https://www.instagram.com/rionegociosdelsur/?hl=es-la",
		"icono" => "fab fa-instagram",
		"imagen" => "images/instagram.png"
	],
];

//datos de contacto 
$datos_contacto = [
		"direccion" => [
			"direccion" => "Calle 75 Sur # 45-40 Sabaneta- Antioquia",
			"icono" => "fas fa-map-marker-alt",
		],
		"telefono_fijo" => [
			"link"=> "6042885140",
			"imprimir" => "(604) 288 51 40",
			"icono" => "fas fa-phone",
		],
		"celular" => [
			"link"=> "+573013623201",
			"imprimir" => "301 362 3201",
			"icono" => "fas fa-mobile-alt",
		],
		"whatsapp" => [
			"link"=> "https://api.whatsapp.com/send?phone=573013623201&text=&source=&data=",
			"imprimir" => "301 362 3201",
			"icono" => "fab fa-whatsapp",
		],
		"correo" => [
				"correo" => "atencionalcliente@rionegociosdelsur.com",
				"icono" => "far fa-envelope",
		],
		"horario" => [
			"horario" => "Lunes a Viernes 8:00 am – 5:30 pm - Sábados 8:00 am – 12:00m",
			"icono" => "fas fa-calendar-alt",
		],
];

//logos aliados
// $logos_aliados = [
	// 0 => "images/libertador.png",
	// 1 => "images/unifianza.png",
	// 2 => "images/fenalco.png",
	// 3 => "images/fgi.png",
	// 4 => "images/icontec.png",
// ],

//formularios aseguradoras
// $formularios_aseguradoras = [
	// 0 => [
		// 'nombre' => 'El Libertador',
		// 'imagan' => 'images/libertador.png',
		// 'ruta' => 'http://www.ellibertador.co/wps/portal/el-libertador/home'
	// ],
	// 1 => [
		// 'nombre' => 'Unifianza',
		// 'imagan' => 'images/unifianza.png',
		// 'ruta' => ''
	// ],
	// 2 => [
		// 'nombre' => 'FGI',
		// 'imagan' => 'images/fgi.png',
		// 'ruta' => ''
	// ],
// ];

//imagenes slide home
$imagenes_slide_principal = [
	0 =>[
		'imagen' => 'images/slide1.jpg',
		'alt' => 'Imagen carrusel principal'
	],
	1 => [
		'imagen' => 'images/slide2.jpg',
		'alt' =>'Imagen carrusel principal'
	],
	2 => [
		'imagen' => 'images/slide3.jpg',
		'alt' =>'Imagen carrusel principal'
	],
];

//textos quienes somos
$texto_quienes_somos = [
	"quienes_somos" => [
		"titulo" => "Quiénes Somos",//en negrita
		"parrafos" => [
			0 => "Somos una empresa orientada a ofrecer servicios administrativos y jurídicos en el sector inmobiliario.",
		],	
	],
	"mision" => [
		"titulo" => "Misión",//en negrita
		"parrafo" => "Ofrecer soluciones inmobiliarias y asesorías jurídicas, Orientada atender las necesidades habitacionales y legales de nuestros clientes, con un servicio de intermediación confiable, efectivo y eficiente.",
	],
	"vision" => [
		"titulo" => "Visión",//en negrita
		"parrafo" => "Para el 2025 RIO NEGOCIOS DEL SUR estará posicionado como una Empresa confiable en la oferta de servicios inmobiliarios, con una estructura administrativa fortalecida, encaminada al crecimiento estratégico, organizado y continuo.",
	],
	"valores" => [
		"titulo" => "Valores Corporativos",//en negrita
		"parrafos" => [
			0 => "Compromiso", 
			1 => "Respeto", 
			2 => "Responsabilidad",
			3 => "Confiabilidad",
		],
	],
];


// imaganes varias
$imagenes = [
	"quienes_somos" => [
		'imagen' => 'images/banner_quienes_somos.jpg',
		'alt' => 'Imagen'
	],
	"inmuebles" => [
		'imagen' => 'images/banner_inmuebles.jpg',
		'alt' => 'Imagen'
	],
	"detalle" => [
		'imagen' => 'images/banner_detalle_inmueble.jpg',
		'alt' => 'Imagen'
	],
	"requisitos" => [
		'imagen' => 'images/banner_requisitos.jpg',
		'alt' => 'Imagen'
	],
	"contacto" => [
		'imagen' => 'images/banner_contacto.jpg',
		'alt' => 'Imagen'
	],
];

//requisitos

$textos_requisitos = [
	//canon hasta 800.000
	"canon_1" => [
		"titulo" => "Para canon de arrendamiento hasta 800.000",
		"parrafos" => [
			0 => "Tomador",
			1 => "Carta laboral o certificado de ingresos",
			2 => "Fotocopia de la Cédula",
			3 => "Llenar formulario",
			4 => "Firma y huella en autorización",
			5 => "Codeudor ",
			6 => "Con propiedad raiz libre de gravamen, que presente certificado de libertad, que no este reportado en las centrales de riesgos, fotocopia de la cédula, o un codeudor que tenga contrato a término indefinido y que gane el doble del canon de arrendamiento.",
			7 => "Costos de estudio",
			8 => "Papeleria",
			9 => "Comisión",
		],
		"parrafo" => "Si la persona trabaja independiente debe traer certificado de ingresos",
	],
	//canon de 800.000 en adelante
	"canon_2" => [
		"titulo" => "Para canon de arriendo de 800.000 en adelante",
		"parrafos" => [
			0 => "Tomador",
			1 => "Carta laboral o certificado de ingresos",
			2 => "Fotocopia de la Cédula",
			3 => "Llenar formulario",
			4 => "Firma y huella en autorización",
			5 => "Necesita dos codeudores así:",
			6 => "1 Codeudor",
			7 => "Debe tener propiedad raiz libre de gravamen, certificado de libertad, que no este reportado en las centrales de riesgos. Fotocopia de la cédula. ",
			8 => "2 Codeudor",
			9 => "Contrato a término indefinido que gane un salario del doble del canon de arrendamiento, debe presentar carta laboral, fotocopia de la cédula, no estar reportado en las centrales de riesgos.",
			10 => "Costos de estudio",
			11 => "Papeleria",
			12 => "Comisión",
		],
		
		"parrafo" => "Si la persona trabaja independiente debe traer certificado de ingresos",
		"importante" => [
			"titulo" => "Importante",//negrita
			"parrafos" => "La propiedad raíz del codeudor solicitante debe ser idónea (sin limitaciones al dominio, embargo, afectación a vivienda familiar, usufructo, patrimonio de familia, entre otros).",
		],
	],
];

//formularios requisitos

$formularios_requisitos = [
	0 => [
		'nombre' => 'Descargar Formulario de Arrendamiento',
		'ruta' => '/FORMULARIO-ARRENDAMIENTO.xlsx'
	],
	1 => [
		'nombre' => 'Descargar Autorización',
		'ruta' => '/AUTORIZACIONES-FORMULARIO.pdf'
	]
];

//iconos servicios
$iconos_servicios = [
	"arrendamientos" => "fas fa-sign",
	"ventas" => "fas fa-tags",
	"procesos_civiles" => "fas fa-balance-scale",
	"asesoria" => "fas fa-handshake",
	"reclamaciones" => "fas fa-file-contract",
	"procesos_responsabilidad" => "fas fa-file-signature",
	"administracion_propiedad_horizontal" => "fas fa-user-tie",
	
];
	
//textos servicios
$texto_servicios = [
	"actividades_inmobiliarias" => [
		"arrendamiento" =>[
			"titulo" => "Arrendamiento",
			"parrafo" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
		],
		"ventas" =>[
			"titulo" => "Ventas",
			"parrafo" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
		],
	"asesoria" =>[
		"titulo" => "Asesorías Jurídicas",
		"parrafos" => [
			0 => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
		],
	],
	"procesos_civiles" =>[
		"titulo" => "Procesos Civiles",
		"parrafos" => [
			0 => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",		
		],
	],
	"reclamaciones" =>[
		"titulo" => "Reclamaciones de Tránsito",
		"parrafo" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
	],
	"procesos_responsabilidad" =>[
		"titulo" => "Procesos de Responsabilidad Contractual y Extracontractual",
		"parrafo" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
	],

	"administracion_propiedad_horizontal" =>[
		"titulo" => "Administración de Propiedad Horizontal",
		"parrafo" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam, molestiae amet. Ullam expedita deserunt aspernatur reiciendis fuga dicta eligendi? Accusamus?",
	],
],
];

const bases = [
    {titulo: '<a class=titulo href=https://ageconsearch.umn.edu/ target=_blank>AgEcon Search</a>', 
    refimg:'<a href=https://ageconsearch.umn.edu/ target=_blank><img width=100% src=Imagenes/base1.jpg alt=base1/></a>',
    desc:'Presenta los siguientes recursos: revistas científicas, documentos de conferencia, capítulos de libros, trabajos de discusión y tesis',
    area:'Agricultura, ingeniería ambiental y ciencias económicas aplicadas',
    idioma:'Inglés',
    acceso:'Acceso libre'},
    
    {titulo: '<a class="titulo" href="https://agris.fao.org/agris-search/index.do" target="_blank">Agris FAO</a>', 
    refimg:'<a class="titulo" href="https://agris.fao.org/agris-search/index.do" target="_blank"><img width=100% src=Imagenes/base2.jpg alt=base2/></a>',
    desc:'Base de datos mundial que proporciona acceso a información relativa a la ciencia y la tecnología agrícola. Está respaldada por la FAO. Tiene enlaces a texto completo de publicaciones, artículos de revistas, monografías, capítulos de libros, literatura gris, informes técnicos, tesis, disertaciones y conferencias.',
    area:'Agricultura e ingeniería ambiental',
    idioma:'Español e inglés',
    acceso:'Acceso libre'},	

    {titulo: '<a class="titulo" href="https://alicia.concytec.gob.pe/" target="_blank">Alicia</a>', 
    refimg:'<a class="titulo" href="https://alicia.concytec.gob.pe/" target="_blank"><img width="100%" src="Imagenes/base3.png" alt="base3"/></a>',
    desc:'El Repositorio Nacional Digital ALICIA ofrece una gran variedad de trabajos de investigación, libros y artículos científicos multidisciplinarios a texto completo dirigidos a investigadores y estudiantes.',
    area:'Educación, economía, derecho, ciencias básicas y otras',
    idioma:'Español',
    acceso:'Acceso libre'},

    {titulo: '<a class="titulo" href="https://www.archinform.net/index.htm" target="_blank">ArchInform</a>', 
    refimg:'<a class="titulo" href="https://www.archinform.net/index.htm" target="_blank"><img width="100%" src=Imagenes/base4.jpg alt="base4"/></a>',
    desc:'Esta base de datos surgió originalmente de los registros de proyectos de construcción de estudiantes de arquitectura y se ha convertido en la base de datos en línea más grande sobre arquitectos y edificios en todos del mundo con más de 9500 obras y proyectos arquitectónicos principalmente del siglo XX hasta la actualidad.',
    area:'Arquitectura e ingeniería',
    idioma:'Inglés y español',
    acceso:'Acceso libre'},

    {titulo:'<a class="titulo" href="https://doaj.org/" target="_blank">DOAJ</a>', 
    refimg:'<a class="titulo" href="https://doaj.org/" target="_blank"><img width="100%" src=Imagenes/base5.png alt="base5"/></a>',
    desc:'El Directory of Open Access Journals (DOAJ) es un directorio de revistas de acceso abierto. Permite explorarpublicaciones científicas y académicas que cumplen con estándares de calidad como la revisión por pares y el control decalidad editorial.',
    area:'Administración, economía, salud y otras',
    idioma:'Español, inglés, portugués y otros',
    acceso:'Acceso libre'},

    {titulo: '<a class="titulo" href="https://iopscience.iop.org/" target="_blank">IOP Science</a>', 
    refimg:'<a class="titulo" href="https://iopscience.iop.org/" target="_blank"><img width="100%" src="Imagenes/base6.png" alt="base6"/></a>',
    desc:'IOP Science es la colección digital definitiva del trabajo publicado por el Institute of Physics desde 1874. Esta colección ofrece el acceso perpetuo e inmediato a más de tres millones de páginas de contenido pertenecientes a todas las revistas publicadas por el IOP.',
    area:'Ingeniería, ciencias básicas, Medicina, educación',
    idioma:'Inglés y español',
    acceso:'Acceso libre'},

    {titulo: '<a class="titulo" href="http://www.lareferencia.info/es/" target="_blank">La Referencia</a>', 
    refimg:'<a class="titulo" href="http://www.lareferencia.info/es/" target="_blank"><img width="100%" src="Imagenes/base7.png" alt="base7"/></a>',
    desc:'El portal La Referencia permite explorar la producción científica de las instituciones de educación superior de América Latina.',
    area:'Ingeniería, ciencias básicas, medicina, educación y otras',
    idioma:'Español',
    acceso:'Acceso libre'},

    {titulo: '<a class="titulo" href="https://www.alphaeditorialcloud.com/library" target="_blank">Alpha Cloud</a>', 
    refimg:'<a class="titulo" href="https://www.alphaeditorialcloud.com/library" target="_blank"><img width="100%" src="Imagenes/base8.png" alt="base8"/></a>',
    desc:'Es una plataforma que permite acceder en línea a los contenidos de los libros digitales de las editoriales: Marge Books, Alfaomega, Editorial Brujas, Aenor y ESIC.',
    area:'Administración, Ciencias de la salud, Economía, Educación, entre otras',
    idioma:'Español',
    acceso:'Dentro y fuera del campus universitario'},

    {titulo: '<a class="titulo" href="https://bc.vitalsource.com/tenants/bibliotecaunfv/bookshelf" target="_blank">Ebooks 7-24</a>', 
    refimg:'<a class="titulo" href="https://bc.vitalsource.com/tenants/bibliotecaunfv/bookshelf" target="_blank"><img width="100%" src="Imagenes/base9.png" alt="base9"/></a>',
    desc:'La plataforma Ebooks 7-24 permite consultar los contenidos de libros digitales de las prestigiosas editoriales Cengage y McGraw Hill.',
    area:'Multidisciplinario',
    idioma:'Español',
    acceso:'Dentro y fuera del campus universitario'},

    {titulo: '<a class="titulo" href="https://ebooks.editorialmacro.com/auth/login" target="_blank">MACRO Biblioteca Digital</a>', 
    refimg:'<a class="titulo" href="https://ebooks.editorialmacro.com/auth/login" target="_blank"><img width="100%" src="Imagenes/base10.jpg" alt="base10"/></a>',
    desc:'Colección de libros digitales de la editorial Macro.',
    area:'Economía, Administración, Contabilidad, Humanidades, Educación, Derecho, Psicología, Salud.',
    idioma:'Español',
    acceso:'Restringido. Solamente para los usuarios de la UNFV'},

    {titulo: '<a class="titulo" href="https://iopscience.iop.org/" target="_blank">Vital Source - Pearson</a>', 
    refimg:'<a class="titulo" href="https://iopscience.iop.org/" target="_blank"><img width="100%" src="Imagenes/base11.png" alt="base11"/></a>',
    desc:'La plataforma Vital Source permite acceder a los contenidos de los libros digitales de la prestigiosa editorial Pearson.',
    area:'Administración, Economía y Ciencias de la computación',
    idioma:'Español e inglés',
    acceso:'Dentro y fuera del campus universitario'}
]
const formulario = document.querySelector('#formulario');
const boton = document.querySelector('#boton');
const resultado = document.querySelector('#resultado');


const filtrar = () => {
    resultado.innerHTML='';
    resultado.innerHTML += `<br><img src=../../Imagenes/seccion.png alt=seccion/><b>&nbsp;&nbsp;<span class=seccion>RESULTADO DE BÚSQUEDA</span></b><br><br>`
    const captar = document.querySelector('#filtro');
    const texto = formulario.value.toLowerCase();
    const buscar = captar.value.toLowerCase();
    cont=0;
    for(let base of bases){
        let filtro;
        if(buscar=="desc"){
            filtro = base.desc.toLowerCase();
        }else if(buscar=="area"){
            filtro = base.area.toLowerCase();
        }else if(buscar=="idioma"){
            filtro = base.idioma.toLowerCase();
        }else if(buscar=="acceso"){
            filtro = base.acceso.toLowerCase();
        }else{
            filtro = base.titulo.toLowerCase();
        }
        console.log(buscar.value);
        if(filtro.indexOf(texto)  !== -1){
            resultado.innerHTML +=  `
            <table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
            <tr valign=middle align=center>
                <td bgcolor=#FFE5B4 align=center height=70 width=16%> <p>${base.refimg}</p></td>
                <td bgcolor=#EBF4FA align=justify height=70> <p>
                <img src=Imagenes/link.png alt=link/>&nbsp;&nbsp;${base.titulo}<br>
                <span class=desc>${base.desc}<br>
                <b>Áreas:</b> ${base.area}<br>
                <b>Idioma:</b> ${base.idioma}<br>
                <b>Acceso:</b> ${base.acceso}<br>
                </span></p></td>
            </tr>
            </table><br>
            `
            cont++;
        }
    }
    if(cont==0){
        resultado.innerHTML += `
        <table bordercolor=black width=95% border=3 align=center cellspacing=5 cellpadding=4 class=celda>
         <tr><td>Bases de Datos no encontrada...</td></tr> 
        </table><br>
        `
    }
}
boton.addEventListener('click', filtrar);
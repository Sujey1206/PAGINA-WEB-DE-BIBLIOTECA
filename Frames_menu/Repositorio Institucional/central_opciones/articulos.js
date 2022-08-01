var titulorevista=["<p style=font-size:20>Catedra Villarreal</p>","<p style=font-size:18>Catedra Villarreal - Psicologia</p>","<p style=font-size:20>The Biologist</p>","<p style=font-size:20>Neotropical Helminthology</p>"];
var revista0 = new Array(5)
revista0[0] = '<a href="https://revistas.unfv.edu.pe/RCV/article/view/1046/1149" target="_blank"><input type="submit" value="Ver artículo 1" class="boton2"/></a>'
revista0[1] = '<a href="https://revistas.unfv.edu.pe/RCV/article/view/1017/1151" target="_blank"><input type="submit" value="Ver artículo 2" class="boton2"/></a>'
revista0[2] = '<a href="https://revistas.unfv.edu.pe/RCV/article/view/1071/1153" target="_blank"><input type="submit" value="Ver artículo 3" class="boton2"/></a>'
revista0[3] = '<a href="https://revistas.unfv.edu.pe/RCV/article/view/1076/1159" target="_blank"><input type="submit" value="Ver artículo 4" class="boton2"/></a>'
revista0[4] = '<a href="https://revistas.unfv.edu.pe/RCV/article/view/1064/1157" target="_blank"><input type="submit" value="Ver artículo 5" class="boton2"/></a>'

var revista1 = new Array(5)
revista1[0] = '<a href="https://revistas.unfv.edu.pe/CVFP/article/view/313/279" target="_blank"><input type="submit" value="Ver artículo 1" class="boton2"/></a>'
revista1[1] = '<a href="https://revistas.unfv.edu.pe/CVFP/article/view/314/280" target="_blank"><input type="submit" value="Ver artículo 2" class="boton2"/></a>'
revista1[2] = '<a href="https://revistas.unfv.edu.pe/CVFP/article/view/315/281" target="_blank"><input type="submit" value="Ver artículo 3" class="boton2"/></a>'
revista1[3] = '<a href="https://revistas.unfv.edu.pe/CVFP/article/view/316/282" target="_blank"><input type="submit" value="Ver artículo 4" class="boton2"/></a>'
revista1[4] = '<a href="https://revistas.unfv.edu.pe/CVFP/article/view/317/283" target="_blank"><input type="submit" value="Ver artículo 5" class="boton2"/></a>'

var revista2 = new Array(5)
revista2[0] = '<a href="https://revistas.unfv.edu.pe/rtb/article/view/1319/1421" target="_blank"><input type="submit" value="Ver artículo 1" class="boton2"/></a>'
revista2[1] = '<a href="https://revistas.unfv.edu.pe/rtb/article/view/1221/1114" target="_blank"><input type="submit" value="Ver artículo 2" class="boton2"/></a>'
revista2[2] = '<a href="https://revistas.unfv.edu.pe/rtb/article/view/1222/1115" target="_blank"><input type="submit" value="Ver artículo 3" class="boton2"/></a>'
revista2[3] = '<a href="https://revistas.unfv.edu.pe/rtb/article/view/1267/1120" target="_blank"><input type="submit" value="Ver artículo 4" class="boton2"/></a>'
revista2[4] = '<a href="https://revistas.unfv.edu.pe/rtb/article/view/1278/1124" target="_blank"><input type="submit" value="Ver artículo 5" class="boton2"/></a>'

var revista3 = new Array(5)
revista3[0] = '<a href="https://revistas.unfv.edu.pe/NH/article/view/1196/1096" target="_blank"><input type="submit" value="Ver artículo 1" class="boton2"/></a>'
revista3[1] = '<a href="https://revistas.unfv.edu.pe/NH/article/view/1197/1097" target="_blank"><input type="submit" value="Ver artículo 2" class="boton2"/></a>'
revista3[2] = '<a href="https://revistas.unfv.edu.pe/NH/article/view/1198/1098" target="_blank"><input type="submit" value="Ver artículo 3" class="boton2"/></a>'
revista3[3] = '<a href="https://revistas.unfv.edu.pe/NH/article/view/1214/1113" target="_blank"><input type="submit" value="Ver artículo 4" class="boton2"/></a>'
revista3[4] = '<a href="https://revistas.unfv.edu.pe/NH/article/view/1223/1116" target="_blank"><input type="submit" value="Ver artículo 5" class="boton2"/></a>'

var revistas = new Array(4)
revistas[0] = revista0
revistas[1] = revista1
revistas[2] = revista2
revistas[3] = revista3
document.write("<table width=100%  cellpadding=1 cellspacing=10px>");
for (i = 0; i < revistas.length; i++) {
    document.write("<tr>")
    document.write("<td width=20% align=center class=titrev><b>" + titulorevista[i] + "</b></td>")
    for (j = 0; j < revistas[i].length; j++) {
        document.write("<td align=center>" + revistas[i][j] + "</td>")
    }
    document.write("</tr>")
}
document.write("</table>")
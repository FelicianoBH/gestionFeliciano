<?php 
echo '<div><div id="divac1"><p><label for="codigo">Código Producto : </label><input type="text" id="codigo" size="12" maxlength="12" onfocus="colorTexto(this.id)"   onblur="noFoco(this.id)" style="width:110px;height:35px"/></p></div><div id="divac2"><p><label for="descripcion">Descripcion: </label><input type="text" id="descripcion" size="40" maxlength="40"  style="width:350px;height:35px;font-size:12px;"  /></p></div><div id="divac3"><p><label for="proveedor">Proveedor: </label><input type="text" id="proveedor_des" size="3" maxlength="3" readonly="readonly" style="width:300px;height:35px;font-size:12px;"/></p></div><div id="divac4"><p><label for="familia">Familia: </label><input type="text" id="familia_des" size="3" maxlength="3" readonly="readonly" style="width:300px;height:35px;font-size:12px;"/></p></div><div id="divac44"><p><label for="subfamilia">SubFamilia: </label><input type="text" id="subfamilia_des" size="3" maxlength="3" readonly="readonly" style="width:300px;height:35px;font-size:12px;"/></p></div><div id="divac5"><p><label for="Costo">Precio Costo: </label><input type="text" id="costo" size="12" maxlength="12" style="width:150px;height:35px;font-size:12px;"/></p></div><div id="divac6"><p><label for="precio_1">Precio 1: </label><input type="text" id="precio_1" size="12" maxlength="12" style="width:150px;height:35px;font-size:12px;"/></p></div><div id="divac7"><p><label for="precio_2">Precio 2: </label><input type="text" id="precio_2" size="12" maxlength="12" style="width:150px;height:35px;font-size:12px;"/></p></div><div id="divac8"><p><label for="precio_3">Precio 3: </label><input type="text" id="precio_3" size="12" maxlength="12" style="width:150px;height:35px;font-size:12px;"/></p></div></form><br><div style="padding-left:180px;<form method="post" action="#" enctype="multipart/form-data"><div class="card" style="display:block; margin: auto;" ><img name="hereB" id ="aquiB" width="15%" class="card-img-top" src="/PROYECTO3/IMAGEN_SERVIDOR/"><div class="card-body"><p class="card-text">  Seleccione una imagen...</p><div class="form-group"><input type="file" class="form-control-file" name="imageB" id="imageB" required></div><div><input type="button" class="btn btn-primary upload" id="botonsubirB" value="Cargar Imágen"><input type="button" class="btn btn-success upload" id="botonGrabar" value="GRABAR PRODUCTO" onclick="grabarProducto()"></div></form></div>';
 ?>
<link rel="stylesheet" href="./css/registrarme.css">
<section class="content">
<div class="registro">
    <form action="" class="form-ponente">
        <div class="title">
            <h1>Registrate en <span>PONENTE</span></h1>
        </div>
            <div class="control">
                    <label for="eje_tematico">Eje tematico:</label>
                    <input type="text" name="eje_tematico" id="eje_tematico">
            </div>
            <div class="control">
                    <label for="institución_de_participacion_ponente">Institución de participacion:</label>
                    <select name="institución_de_participacion_ponente" id="institución_de_participacion_ponente">
                        <option value="value1" disabled selected>Elije la institución a la que perteneces</option>
                        <option value="value2">SENA</option>
                        <option value="value3">Otra</option>
                    </select>
                </div>
            <div class="control_doble">
                <div class="control">
                    <label for="programa">Programa de formación:</label>
                    <input type="text" name="programa" class="input" id="programa">
                </div>
                <div class="control">
                    <label for="ficha"># ficha:</label>
                    <input type="text" name="ficha" class="input" id="ficha">
                </div>
            </div>
            <div class="control">
                Numero de ponentes: 
                <span class="cantidad_ponentes" data-cantidad="1">1</span>
                <span class="cantidad_ponentes" data-cantidad="2">2</span>
                <span class="cantidad_ponentes" data-cantidad="3">3</span>
            </div>
                <div id="ponentes-container">

                </div>
            <div class="control_doble">
                <div class="control">
                    <label for="nombre_proyecto">Nombre de su proyecto:</label>
                    <input type="text" name="nombre_proyecto" class="input" id="nombre_proyecto">
                </div>
                <div class="control">
                    <label for="tipo_proyecto">Tipo de proyecto:</label>
                    <select name="tipo_proyecto" id="tipo_proyecto">
                        <option value="value1" disabled selected>Elije el tipo de proyecto</option>
                        <option value="value2">Formativo</option>
                        <option value="value3">Productivo</option>
                        <option value="value3">SENNOVA</option>
                        <option value="value3">Externo</option>
                    </select>
                </div>
            </div>
<div class="box-archivos_para_subir">
    <div>
        <p>Sube la información de tu proyecto en formato .doc <span>(Word)</span>:</p>
        <input type="file" accept=".doc, .docx" id="archivoProyecto" name="archivoProyecto">
    </div>
    <div>
        <p>Sube la presentación de tu proyecto en formato .ppt, .pptx <span>(PowerPoint)</span> o .pdf:</p>
        <input type="file" accept=".ppt, .pptx, .pdf" id="archivoProyecto" name="archivoProyecto">
    </div>
</div>
    
                <input type="submit" class="btn_registrarme"value="Registrarme">
    </form>
</div>    
</section>
<script src="./js/registrarme.js"></script>
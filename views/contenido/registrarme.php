<link rel="stylesheet" href="./css/registrarme.css">
<section class="content">
    <div class="categorias_de_registros">
        <h1>Elige la categoria en la que quieres participar</h1>
        <ul>
        <button class="button" onclick="showForm(1)" data-index="1">PONENTE</button>
        <button class="button" onclick="showForm(2)" data-index="2">POSTER</button>
        <button class="button" onclick="showForm(3)" data-index="3">FERIA EMPRESARIAL</button>
        <button class="button" onclick="showForm(4)" data-index="3">TORNEO DE ROBOTICA</button>
        <!-- Agrega los demás botones de categoría aquí -->

        </ul>
    </div>
<div class="registro">
    <form action="" class="form-ponente" data-form-index="1">
        <div class="title">
            <h2>Registrate en <span>PONENTE</span></h2>
        </div>
            <div class="control">
                    <label for="eje_tematico">Eje tematico:</label>
                    <input type="text" name="eje_tematico" id="eje_tematico">
            </div>
            <div class="control control-select">
                    <label for="institución_de_participacion_ponente">Institución de participacion:</label>
                    <select name="institución_de_participacion_ponente" id="institución_de_participacion_ponente">
                        <option value="value1" disabled selected>Inst a la que perteneces</option>
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
                    <label for="ficha">N° de ficha:</label>
                    <input type="text" name="ficha" class="input" id="ficha">
                </div>
            </div>
            <div class="control">
                Numero de ponentes: 
                <span class="cantidad_ponentes" data-cantidad="1">1</span>
                <span class="cantidad_ponentes" data-cantidad="2">2</span>
                <span class="cantidad_ponentes" data-cantidad="3">3</span>
            </div>
                <div id="ponentes-container-1">

                </div>
            <div class="control_doble">
                <div class="control">
                    <label for="nombre_proyecto">Nombre de su proyecto:</label>
                    <input type="text" name="nombre_proyecto" class="input" id="nombre_proyecto">
                </div>
                <div class="control control-select">
                    <label for="tipo_proyecto">Tipo de proyecto:</label>
                    <select name="tipo_proyecto" id="tipo_proyecto">
                        <option value="value1" disabled selected>Elije el tipo</option>
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
                    <input type="file" accept=".doc, .docx" id="archivoProyecto" name="archivoProyecto" multiple>
                </div>
                <div>
                    <p>Sube la presentación de tu proyecto en formato .ppt, .pptx <span>(PowerPoint)</span> o .pdf:</p>
                    <input type="file" accept=".ppt, .pptx, .pdf" id="archivoProyecto" name="archivoProyecto" multiple>
                </div>
            </div>
                
            <input type="submit" class="btn_registrarme"value="Registrarme">
        </form>


    <!--------------------------------------------------------------------------------------------->

    <form action="" class="form-poster" data-form-index="2">
        <div class="title">
            <h2>Registrate en <span>POSTER</span></h2>
        </div>
            <div class="control control-select">
                    <label for="institución_de_participacion_ponente">Institución de participacion:</label>
                    <select name="institución_de_participacion_ponente" id="institución_de_participacion_ponente">
                        <option value="value1" disabled selected>Inst a la que perteneces</option>
                        <option value="value2">SENA</option>
                        <option value="value3">Otra</option>
                    </select>
            </div>
            <div class="control">
                Numero de ponentes: 
                <span class="cantidad_ponentes" data-cantidad="1">1</span>
                <span class="cantidad_ponentes" data-cantidad="2">2</span>
                <span class="cantidad_ponentes" data-cantidad="3">3</span>
            </div>
                <div id="ponentes-container-2">

                </div>
            <div class="control_doble">
                <div class="control">
                    <label for="nombre_proyecto">Nombre de su proyecto:</label>
                    <input type="text" name="nombre_proyecto" class="input" id="nombre_proyecto">
                </div>
                <div class="control control-select">
                    <label for="tipo_proyecto">Tipo de proyecto:</label>
                    <select name="tipo_proyecto" id="tipo_proyecto">
                        <option value="value1" disabled selected>Elije el tipo</option>
                        <option value="value2">Formativo</option>
                        <option value="value3">Productivo</option>
                        <option value="value3">SENNOVA</option>
                        <option value="value3">Externo</option>
                    </select>
                </div>
            </div>
            <div class="box-archivos_para_subir">
                    <p>Debe cargar lapresentacion o diseño del Poster en formato .ppt, .pptx <span>(PowerPoint)</span> o .pdf:</p>
                    <input type="file" accept=".ppt, .pptx, .pdf" id="archivoProyecto" name="archivoProyecto" multiple>
            </div>        
            <input type="submit" class="btn_registrarme"value="Registrarme">
    </form>

    <!--------------------------------------------------------------------------------------------->

    <form action="" class="form-feria-empresarial" data-form-index="3">
        <div class="title">
            <h2>Registrate en <span>FERIA EMPRESARIAL</span></h2>
        </div>
            <div class="control control-select">
                    <label for="institución_de_participacion_ponente">Institución de participacion:</label>
                    <select name="institución_de_participacion_ponente" id="institución_de_participacion_ponente">
                        <option value="value1" disabled selected>Inst a la que perteneces</option>
                        <option value="value2">SENA</option>
                        <option value="value3">Otra</option>
                    </select>
                </div>
            <div class="control_doble">
                <div class="control">
                    <label for="nombre_proyecto">Nombre de su proyecto:</label>
                    <input type="text" name="nombre_proyecto" class="input" id="nombre_proyecto">
                </div>
                <div class="control control-select">
                    <label for="tipo_proyecto">Tipo de proyecto:</label>
                    <select name="tipo_proyecto" id="tipo_proyecto">
                        <option value="value1" disabled selected>Elije el tipo</option>
                        <option value="value2">Formativo</option>
                        <option value="value3">Productivo</option>
                        <option value="value3">SENNOVA</option>
                        <option value="value3">Externo</option>
                    </select>
                </div>
            </div>
            <div class="control">
                Numero de ponentes: 
                <span class="cantidad_ponentes" data-cantidad="1">1</span>
                <span class="cantidad_ponentes" data-cantidad="2">2</span>
                <span class="cantidad_ponentes" data-cantidad="3">3</span>
            </div>
                <div id="ponentes-container-3">

                </div>
            <div class="box_aclaracion">
                <p>Aclaración: Para el stand maximo dos (2) personas por proyecto propuesto o emprendimiento</p>
            </div>
            <div class="box-archivos_para_subir">
                <div>
                    <p>Sube la información de tu proyecto en formato .doc <span>(Word)</span>:</p>
                    <input type="file" accept=".doc, .docx" id="archivoProyecto" name="archivoProyecto" multiple>
                </div>
                <div>
                    <p>Sube la presentación de tu proyecto en formato .ppt, .pptx <span>(PowerPoint)</span> o .pdf:</p>
                    <input type="file" accept=".ppt, .pptx, .pdf" id="archivoProyecto" name="archivoProyecto" multiple>
                </div>
            </div>
                
            <input type="submit" class="btn_registrarme"value="Registrarme">
    </form>


    <!--------------------------------------------------------------------------------------------->

    <form action="" class="form-torneo-de-robotica" data-form-index="4">
    <div class="title">
        <h2>Registrate en <span>TORNEO DE ROBOTICA</span></h2>
    </div>
        <div class="control control-select">
                <label for="institución_de_participacion_ponente">Categoria de participacion:</label>
                <select name="institución_de_participacion_ponente" id="institución_de_participacion_ponente">
                    <option value="value1" disabled selected>Elija</option>
                    <option value="value2">Robot seguidor de linea</option>
                    <option value="value3">Mini sumo</option>
                    <option value="value3">Futbolero o de servicio</option>
                </select>
            </div>
        <div class="control_doble">
            <div class="control">
                <label for="nombre_proyecto">Nombre de su proyecto:</label>
                <input type="text" name="nombre_proyecto" class="input" id="nombre_proyecto">
            </div>
            <div class="control control-select">
                <label for="tipo_proyecto">Tipo de proyecto:</label>
                <select name="tipo_proyecto" id="tipo_proyecto">
                    <option value="value1" disabled selected>Elije el tipo</option>
                    <option value="value2">Formativo</option>
                    <option value="value3">Productivo</option>
                    <option value="value3">SENNOVA</option>
                    <option value="value3">Externo</option>
                </select>
            </div>
        </div>
        <div class="control">
            Numero de ponentes: 
            <span class="cantidad_ponentes" data-cantidad="1">1</span>
            <span class="cantidad_ponentes" data-cantidad="2">2</span>
        </div>
            <div id="ponentes-container-4">

            </div>
        <div class="box_aclaracion">
            <p>Aclaración: maximo dos (2) personas por categoria</p>
        </div>
        
        <div class="box-archivos_para_subir">
            <div>
                <p>Sube la información de tu proyecto en formato .doc <span>(Word)</span>:</p>
                <input type="file" accept=".doc, .docx" id="archivoProyecto" name="archivoProyecto" multiple>
            </div>
            <div>
                <p>Sube la presentación de tu proyecto en formato .ppt, .pptx <span>(PowerPoint)</span> o .pdf:</p>
                <input type="file" accept=".ppt, .pptx, .pdf" id="archivoProyecto" name="archivoProyecto" multiple>
            </div>
        </div>
            
        <input type="submit" class="btn_registrarme"value="Registrarme">
    </form>
</div>    

</section>
<script src="./js/registrarme.js"></script>
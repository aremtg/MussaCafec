const spanElements = document.querySelectorAll('.cantidad_ponentes');
    const ponentesContainer = document.getElementById('ponentes-container');

    spanElements.forEach(span => {
        span.addEventListener('click', () => {
            const cantidad = span.getAttribute('data-cantidad');
            ponentesContainer.innerHTML = ''; // Limpiar el contenedor

            for (let i = 0; i < cantidad; i++) {
                
                const div = document.createElement('div');
                div.classList.add('control');
            div.innerHTML = `
                <label for="input_nombre_del_ponente_${i + 1}">Nombre del ponente ${i + 1}:</label>
                <input type="text" name="nombre_del_ponente_${i + 1}" id="input_nombre_del_ponente_${i + 1}">
                <label for="input_correo_ponente_${i + 1}">Correo de contacto:</label>
                <input type="text" name="correo_del_ponente_${i + 1}" id="input_correo_ponente_${i + 1}">
                <label for="input_telefono_ponente_${i + 1}">Numero de telefono:</label>
                <input type="text" name="telefono_del_ponente_${i + 1}" id="input_telefono_ponente_${i + 1}">
            `;
            ponentesContainer.appendChild(div);
            }
        });
    });
    
    // const label_nombre_ponente = document.createElement('label');
                // label_nombre_ponente.textContent = `Nombre del ponente ${i + 1}:`;
                // const input_nombre_ponente = document.createElement('input');

                // const label_correo = document.createElement('label');
                // label_correo.textContent = 'Correo de contacto:';
                // const input_correo = document.createElement('input');

                // const label_telefono = document.createElement('label');
                // label_telefono.textContent = 'Numero de telefono:';
                // const input_telefono = document.createElement('input');
                
                // label_nombre_ponente.setAttribute('for', `input_nombre_del_ponente_${i + 1}`);
                // input_nombre_ponente.type = 'text';
                // input_nombre_ponente.name = `nombre_del_ponente_${i + 1}`;
                // input_nombre_ponente.id = `input_nombre_del_ponente_${i + 1}`;
                
                // label_correo.setAttribute('for', `input_correo_ponente_${i + 1}`);
                // input_correo.type = 'text';
                // input_correo.name = `correo_del_ponente_${i + 1}`;
                // input_correo.id = `input_correo_ponente_${i + 1}`;

                // label_telefono.setAttribute('for', `input_telefono_ponente_${i + 1}`);
                // input_telefono.type = 'text';
                // input_telefono.name = `telefono_del_ponente_${i + 1}`;
                // input_telefono.id = `input_telefono_ponente_${i + 1}`;
                
                // ponentesContainer.appendChild(label_nombre_ponente);
                // ponentesContainer.appendChild(input_nombre_ponente);
                // ponentesContainer.appendChild(label_correo);
                // ponentesContainer.appendChild(input_correo);
                // ponentesContainer.appendChild(label_telefono);
                // ponentesContainer.appendChild(input_telefono);
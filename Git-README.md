# Guía para Colaboradores: Proyecto Registro de Libros

Este documento proporciona instrucciones claras para colaborar en el proyecto "Registro de Libros" utilizando GitHub, forks y pull requests.

## Flujo de Trabajo

1.  **Fork del Repositorio:**

    *   Dirígete al repositorio principal del proyecto "dtw_proyecto-final-6" en [GitHub](https://github.com/DavidSalomonDev/dtw_proyecto-final-6).
    *   Haz clic en el botón "Fork" en la esquina superior derecha de la página. Esto creará una copia del repositorio en tu propia cuenta de GitHub.

2.  **Clonar el Fork a tu Máquina Local:**

    *   En tu cuenta de GitHub, ve al repositorio que acabas de forkar.
    *   Haz clic en el botón "Code" y copia la URL del repositorio (asegúrate de que sea la URL de tu fork).
    *   Abre tu terminal o consola y ejecuta el siguiente comando, reemplazando `https://github.com/DavidSalomonDev/dtw_proyecto-final-6` con la URL que copiaste:

    ```bash
    git clone [URL-a-tu-repositorio-fork]
    cd dtw_proyecto-final-6
    ```

3.  **Configurar el Repositorio Remoto "upstream":**

    *   Esto te permitirá mantener tu fork sincronizado con el repositorio principal.
    *   Ejecuta los siguientes comandos en tu terminal:

    ```bash
    git remote add upstream https://github.com/DavidSalomonDev/dtw_proyecto-final-6
    git fetch upstream
    git branch --set-upstream-to=upstream/main main
    ```

    Asegurate que el upstream sea del repositorio principal: `https://github.com/DavidSalomonDev/dtw_proyecto-final-6` 

4.  **Realizar tus Cambios:**

    *   Realiza los cambios necesarios en el código.
    *   Asegúrate de seguir las guías de estilo y las mejores prácticas del proyecto.
    *   Realiza pruebas exhaustivas para asegurar que tus cambios funcionan correctamente.

5.  **Commit de tus Cambios:**

    *   Una vez que hayas terminado de trabajar en tus cambios, agrega los archivos modificados al área de preparación:

    ```bash
    git add .
    ```

    *   Realiza un commit con un mensaje descriptivo:

    ```bash
    git commit -m "Descripción clara y concisa de tus cambios"
    ```

6.  **Sincronizar tu Rama con el Repositorio Remoto:**

    *   Antes de enviar tus cambios, asegúrate de que tu rama esté actualizada con los últimos cambios del repositorio principal:

    ```bash
    git fetch upstream
    git rebase upstream/main
    ```

    *   Si hay conflictos durante el rebase, resuélvelos antes de continuar.

7.  **Enviar tus Cambios a tu Fork:**

    *   Sube tus cambios a tu repositorio fork en GitHub:

    ```bash
    git push origin main
    ```

8.  **Crear un Pull Request:**

    *   Dirígete a tu repositorio fork en GitHub.
    *   Haz clic en el botón "Compare & pull request" que aparecerá en la parte superior de la página.
    *   Asegúrate de que la rama base sea `main` del repositorio principal y la rama de comparación sea tu rama.
    *   Escribe un título y una descripción clara y concisa para tu pull request.
    *   Haz clic en el botón "Create pull request".

9.  **Revisión y Aprobación:**

    *   Espera a que David Salomon revise tu pull request.
    *   Responde a cualquier comentario o pregunta que te haga o comunicate por el grupo de WhatsApp.
    *   Realiza los cambios necesarios según la retroalimentación recibida.
    *   Una vez que tu pull request sea aprobado, será fusionado en la rama `main` del repositorio principal.

#### Consejos Adicionales

*   **Mantén tu Fork Sincronizado:** Regularmente, sincroniza tu fork con el repositorio principal para evitar conflictos y mantenerte al día con los últimos cambios.
*   **Mensajes de Commit Claros:** Escribe mensajes de commit claros y concisos que describan los cambios que has realizado.
*   **Pruebas Exhaustivas:** Realiza pruebas exhaustivas para asegurar que tus cambios funcionan correctamente y no introducen nuevos errores.
*   **Comunicación:** Comunícate con los mantenedores del proyecto y otros colaboradores para discutir tus ideas y resolver cualquier problema que encuentres.

¡Gracias por tu colaboración!

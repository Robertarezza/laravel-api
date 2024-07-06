import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

document.addEventListener('DOMContentLoaded', function() {
    const coverImageInput = document.getElementById('cover_image');
    const coverImagePreview = document.getElementById('cover_image_preview');

    if (coverImageInput && coverImagePreview) {
        coverImageInput.addEventListener('change', function(event) {
            const fileList = event.target.files;
            if (fileList.length > 0) {
                const file = fileList[0];
                coverImagePreview.src = URL.createObjectURL(file);
            }
        });
    } else {
        console.error('Elementi non trovati nel DOM.');
    }
});




//event.target.files è una proprietà degli eventi JavaScript che è disponibile quando si gestisce un evento di input file (change) su un elemento <input type="file">. Questa proprietà restituisce un oggetto FileList, che è una collezione di oggetti File rappresentanti i file selezionati dall'utente tramite l'input file.

//Descrizione dettagliata:
//event: È l'oggetto evento passato alla funzione di gestione dell'evento change. Contiene informazioni sull'evento che è stato attivato (nel nostro caso, quando un file è stato selezionato tramite l'input file).

//event.target: È l'elemento DOM su cui l'evento è stato originariamente attivato. Nell'esempio dell'input file, event.target si riferisce all'elemento <input type="file"> stesso.

//event.target.files: È la proprietà che restituisce un oggetto FileList, che è una raccolta (o una lista) di oggetti File. Questi oggetti File rappresentano i file selezionati dall'utente tramite l'input file.


// Rimuovere la visualizzazione dell'immagine di copertina se il checkbox è selezionato
document.getElementById('remove_cover_image').addEventListener('change', function() {
    if (this.checked) {
        document.getElementById('remove_cover_image_hidden').value = '1';
        document.getElementById('cover_image_preview').style.display = 'none'; // Nascondi l'anteprima dell'immagine
    } else {
        document.getElementById('remove_cover_image_hidden').value = '0';
        document.getElementById('cover_image_preview').style.display = 'block'; // Mostra l'anteprima dell'immagine
    }
});
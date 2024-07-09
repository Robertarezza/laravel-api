import "./bootstrap";
import "~resources/scss/app.scss";
import.meta.glob(["../img/**"]);
import * as bootstrap from "bootstrap";

const imageInput = document.getElementById("cover_image");
const imagePreviewElem = document.getElementById("preview-image");

if (imageInput && imagePreviewElem) {
    // Quando il valore dell'input cambia
    imageInput.addEventListener("change", function () {
        // prelevare il valore dell'input
        const files = imageInput.files;
        console.log(files);
        // Se nell'input c'è un file
        if (files && files.length > 0) {
            console.log("File c'è!", files[0]);
            //  Prelevare URL di questo file
            const imageUrl = URL.createObjectURL(files[0]);
            console.log(imageUrl);
            //  inserire URL del file nell'elemento image
            imagePreviewElem.src = imageUrl;
            //  mostrare l'immagine
            imagePreviewElem.classList.remove("d-none");
            //  Dopo che la preview è stata visualizzata, rilasciamo la memoria allocata dal processo di lettura dell'immagine
            imagePreviewElem.onload = () =>
                URL.revokeObjectURL(imagePreviewElem.src);
        } else {
            // Altrimenti
            console.log("Nessun FILE");
            //  tolgo URL dell'elemento image
            imagePreviewElem.src = "";
            //  nascondo l'immagine
            imagePreviewElem.classList.add('d-none');
        }
    });
}




//event.target.files è una proprietà degli eventi JavaScript che è disponibile quando si gestisce un evento di input file (change) su un elemento <input type="file">. Questa proprietà restituisce un oggetto FileList, che è una collezione di oggetti File rappresentanti i file selezionati dall'utente tramite l'input file.

//Descrizione dettagliata:
//event: È l'oggetto evento passato alla funzione di gestione dell'evento change. Contiene informazioni sull'evento che è stato attivato (nel nostro caso, quando un file è stato selezionato tramite l'input file).

//event.target: È l'elemento DOM su cui l'evento è stato originariamente attivato. Nell'esempio dell'input file, event.target si riferisce all'elemento <input type="file"> stesso.

//event.target.files: È la proprietà che restituisce un oggetto FileList, che è una raccolta (o una lista) di oggetti File. Questi oggetti File rappresentano i file selezionati dall'utente tramite l'input file.


// Rimuovere la visualizzazione dell'immagine di copertina se il checkbox è selezionato
document.getElementById('remove_cover_image').addEventListener('change', function() {
    if (this.checked) {
        console.log(this.checked);
        document.getElementById('remove_cover_image_hidden') == true;
        document.getElementById('image-preview').style.display = 'none'; // Nascondi l'anteprima dell'immagine
    } else {
        document.getElementById('remove_cover_image_hidden') == false;
        document.getElementById('image-preview').style.display = 'block'; // Mostra l'anteprima dell'immagine
    }
});
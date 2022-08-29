import "./bootstrap";
import "../css/app.css";

ClassicEditor.create(document.querySelector("#body"))
    .then((editor) => {
        console.log(editor);
    })
    .catch((error) => {
        console.error(error);
    });

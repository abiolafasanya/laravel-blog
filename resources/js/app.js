import "./bootstrap";
import "../css/app.css";
import "/node_modules/@fortawesome/fontawesome-free/scss/fontawesome.scss";
import "/node_modules/@fortawesome/fontawesome-free/scss/brands.scss";
import "/node_modules/@fortawesome/fontawesome-free/scss/regular.scss";
import "/node_modules/@fortawesome/fontawesome-free/scss/solid.scss";
import "/node_modules/@fortawesome/fontawesome-free/scss/v4-shims.scss";
// import Alpine from "alpinejs";
// window.Alpine = Alpine;
// Alpine.start();

document.getElementById("userMenu").onclick = function (e) {
    document.getElementById("showMenu").classList.toggle("hidden");
};

let date = new Date();
let year = date.getFullYear();

document.getElementById("footer").innerHTML = `Wunmi blog ${year}`;

document.getElementById("navM").classList.add("hidden");
document.getElementById("Mbars").onclick = function (e) {
    // console.log(e.target)
    document.getElementById("navM").classList.toggle("hidden");
};

setTimeout(() => document.getElementById('alert').classList.add('hidden'), 5000)

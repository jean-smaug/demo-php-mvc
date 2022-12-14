// main.js is the single entry point.
// It's used to resolve all CSS parts
import "bootstrap";
import "bootstrap-icons/font/bootstrap-icons.css";
import "bootstrap/dist/css/bootstrap.css";
import "../css/main.css";

(async ()  => {
    switch (window.location.pathname) {
        case "/search": {
            await import("./search");
            break;
        }
    }
})()

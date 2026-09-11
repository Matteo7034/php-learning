document.addEventListener("DOMContentLoaded", function () {
    const banner = document.getElementById("cookie-banner");
    const acceptBtn = document.getElementById("cookie-accept");
    const closeBtn = document.getElementById("cookie-close");

    // Controlla se l'utente ha già preso una decisione
    
    if (!localStorage.getItem("cookieConsent")) {
        banner.classList.remove("hidden");
    }

    // Azione al click su "Accetta All"
    acceptBtn.addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "accepted");
        document.cookie = "user_consent=accepted; max-age=" + (86400*366) + "; path=/";
        banner.classList.add("hidden");
        console.log("cookie accettato");
        location.reload();
    });

    // Azione al click su "Continua senza accettare"
    closeBtn.addEventListener("click", function () {
        localStorage.setItem("cookieConsent", "rejected");
        document.cookie = "user_consent=rejected; max-age=" + (86400 * 365) + "; path=/";
        banner.classList.add("hidden");
        console.log("cookie non accetato");
        location.reload();
    });
});

document.addEventListener("DOMContentLoaded", function () {
  const cookieBanner = document.getElementById("cookie-banner");
  const acceptBtn = document.getElementById("accept-cookies");

  // Check if cookie consent is already given
  if (!localStorage.getItem("cookieAccepted")) {
    cookieBanner.style.display = "block";
  }

  acceptBtn.addEventListener("click", function () {
    localStorage.setItem("cookieAccepted", "true");
    cookieBanner.style.display = "none";
  });
});
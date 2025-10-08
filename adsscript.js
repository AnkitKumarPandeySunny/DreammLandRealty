let adTimer;

// Show 1st ad after 1 second
window.addEventListener("load", () => {
  setTimeout(showFirstAd, 1000);
});

function showFirstAd() {
  const ad1 = document.getElementById("ad1");
  ad1.style.display = "block";

  // Auto-close after 10 seconds
  adTimer = setTimeout(() => {
    closeAd(1);
    showSecondAd();
  }, 10000);
}

function showSecondAd() {
  const ad2 = document.getElementById("ad2");
  ad2.style.display = "block";
}

function closeAd(num) {
  clearTimeout(adTimer);
  const ad = document.getElementById("ad" + num);
  if (ad) ad.style.display = "none";
}

let adTimer;
let repeatTimer;

// 🔹 Start first ad on page load
window.addEventListener("load", () => {
  setTimeout(showFirstAd, 1000); // show ad1 after 1s
  startRepeatCycle(); // schedule repeat every 45s
});

function showFirstAd() {
  clearTimeout(adTimer);
  document.getElementById("ad1").style.display = "block";

  // if user doesn't close, show 2nd ad automatically after 5s
  adTimer = setTimeout(() => {
    showSecondAd();
  }, 5000);
}

function showSecondAd() {
  clearTimeout(adTimer);
  document.getElementById("ad1").style.display = "none";
  document.getElementById("ad2").style.display = "block";
}

function closeAd(num) {
  const ad = document.getElementById("ad" + num);
  if (ad) ad.style.display = "none";
  clearTimeout(adTimer);

  // if Ad1 closed manually → show Ad2 after 3s
  if (num === 1) {
    adTimer = setTimeout(showSecondAd, 3000);
  }
}

// 🔁 Repeat cycle every 45 seconds
function startRepeatCycle() {
  repeatTimer = setInterval(() => {
    document.getElementById("ad1").style.display = "none";
    document.getElementById("ad2").style.display = "none";
    showFirstAd();
  }, 45000);
}

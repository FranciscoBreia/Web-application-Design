

// main.js

document.addEventListener("DOMContentLoaded", () => {
  const hero = document.querySelector(".hero");

  // Array of images to rotate in hero section
  const images = [
    "images/imagebg.png",
    "images/imagebg2.jpg",
    "images/imagebg3.jpg"
  ];

  let index = 0;

  // Function to change hero background
  function changeHeroImage() {
    index = (index + 1) % images.length; // loop back after last image
    hero.style.backgroundImage = `url(${images[index]})`;
  }

  // Change every 5 seconds
  setInterval(changeHeroImage, 5000);
});

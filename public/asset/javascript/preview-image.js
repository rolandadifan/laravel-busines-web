const zoom = mediumZoom(".zoom-image");
zoom.on(
  "open",
  (event) => {
    var x = document.getElementById("owl-category");
    var b = document.getElementById("owl-product");
    var c = document.getElementById("owl-product-recomended");

    // var c = document.get
    x.style.visibility = "hidden";
    b.style.visibility = "hidden";
    c.style.visibility = "hidden";
    // c.style.display = "block"
  },
  { once: false }
);
zoom.on("close", (event) => {
  var x = document.getElementById("owl-category");
  var b = document.getElementById("owl-product");
  var c = document.getElementById("owl-product-recomended");
  // var c = document.get
  x.style.visibility = "visible";
  b.style.visibility = "visible";
  c.style.visibility = "visible";
  // c.style.display = "block"
});




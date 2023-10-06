function alternarModo() {
  const html = document.documentElement
  html.classList.toggle("temaclaro")

  const img = document.querySelector("#profile img")

  if (html.classList.contains("temaclaro")) {
    img.setAttribute("src", "./image/avatar-light.png")
  } else {
    img.setAttribute("src", "./image/avatar.png")
  }
}

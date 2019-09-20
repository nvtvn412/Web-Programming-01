window.onload = () => {
    let images = document.querySelectorAll("img");
    images.forEach((img) => {
        img.onclick = () => {
            window.open("https://se.ifmo.ru/courses/web");
        }
    })
}
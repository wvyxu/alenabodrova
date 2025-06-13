const text = document.querySelectorAll(".menu-item > div > h2");
const div = document.querySelectorAll(".menu-item > div");
for (let i = 0; i < text.length; i++) {
    for (let j = 0; j < div.length; j++) {
        if (text[i].clientWidth > 510 && i==j) {
            div[j].classList.add('overflow');
        }
    }
}
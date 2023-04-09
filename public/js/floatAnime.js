const els = document.querySelectorAll('.floatAnime');
const cb = function(entries, observer) {
    entries.forEach(entry => {
        if(entry.isIntersecting) {
            entry.target.classList.add('inview');
        }else {
        }
    });
}

const io = new IntersectionObserver(cb);
els.forEach(el => io.observe(el));
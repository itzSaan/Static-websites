
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__fadeIn')
        } else {
            entry.target.classList.remove('animate__animated', 'animate__fadeIn')
        }
    })
})

let images = document.querySelectorAll('.img-fluid')
images.forEach(img => observer.observe(img))

const observerOne = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__slideInUp')
        } else {
            entry.target.classList.remove('animate__animated', 'animate__slideInUp')
        }
    })
})

let sectionHeaders = document.querySelectorAll('.section-header')
sectionHeaders.forEach(header => observerOne.observe(header))
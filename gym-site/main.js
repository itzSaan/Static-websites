
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__slideInRight');  
        }
        else {
            entry.target.classList.remove('animate__animated', 'animate__slideInRight'); 
        }
    })
})

const image = document.querySelectorAll('img').forEach(el => {
    observer.observe(el)
})

const observerOne = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__slideInLeft');  
        }
        else {
            entry.target.classList.remove('animate__animated', 'animate__slideInLeft'); 
        }
    })
})

const heading = document.querySelectorAll('h2').forEach(el => {
    observerOne.observe(el)
})

const observerTwo = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        // console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('animate__animated', 'animate__lightSpeedInRight');  
        }
        else {
            entry.target.classList.remove('animate__animated', 'animate__lightSpeedInRight'); 
        }
    })
})

const title = observerTwo.observe(document.querySelector('h1'))


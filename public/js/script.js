// alert('hello');
gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

function animate() {
    gsap.to('.apple-partner', {y: '25', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-partner-right', {x: '-300', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-partner-left', {x: '300', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-cta', {x: '-250', scrollTrigger: {
            scrub: true,
        }});
    gsap.from('.apple-boom', {x: '-250', scrollTrigger: {
            scrub: true,
        }});
}

window.addEventListener('load', function(){
    animate();
})


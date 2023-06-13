import lottie from 'lottie-web';

function loadLottieAnimation() {
    var animation = lottie.loadAnimation({
        container: document.getElementById('lottie-container'),
        renderer: 'svg',
        loop: true,
        autoplay: true,
        path: '/json/verified.json'
    });
}

export default loadLottieAnimation;
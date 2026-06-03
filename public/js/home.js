document.addEventListener('DOMContentLoaded', function(){

    console.log('Home page loaded');

    const button = document.querySelector('.hero-btn');

    button.addEventListener('mouseenter', function(){

        button.style.transform = 'scale(1.05)';

    });

    button.addEventListener('mouseleave', function(){

        button.style.transform = 'scale(1)';

    });

});
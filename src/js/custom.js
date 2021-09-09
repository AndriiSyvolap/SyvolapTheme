window.onload = (event) => {

    const mobileButton = document.getElementById ('menuMobile');
    
    mobileButton.onclick = () => console.log('modile menu open');
    
    const swiper = new Swiper(".mySwiper", {
        autoHeight: true,
    });
    
};
//navbar düzenleme:

$(document).ready(function(){
    $(window).scroll(function(){
        if (this.scrollY > 600) {
            $('.navbar').addClass("sticky");

        }else{
            $('.navbar').removeClass("sticky");

        }
    });
});

/* IE/Safari Scroll Smoothness */

$('.navbar a').on('click', function(e){
    if(this.hash !== ''){
        e.preventDefault();
        const hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 300);
    }
})



//typed animasyonu:

var typed = new Typed(".typing", {

    strings: ["Data Science", "IT Developer", "Veri Bilimi", "Veri Analizi", "Bilişim Uzmanı", "Software"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true

});

var typed = new Typed(".typed-strong", {
   strings: [" Ben Kimim?", "Mahmut", "Ersoy", "Ben"],
   typeSpeed: 100,
   backSpeed: 60,
   loop: true
});

var typed = new Typed(".typed-strong2", {
    strings: ["Neler Yapıyorum?", "Neler Yapıyorum", "Neler Yapıyorum", "Neler Yapıyorum"],
    typeSpeed: 100,
    backSpeed: 60,
    loop: true
});

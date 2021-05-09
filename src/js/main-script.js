$(document).ready(function() {
    $("#lightSlider").lightSlider({
        item:3,
        loop: true,
        slideMove: 1,
        easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
        speed:600,
        responsive : [
            {
                breakpoint:1000,
                settings: {
                    item:2,
                    slideMove:1,
                }
            },
            {
                breakpoint:800,
                settings: {
                    item:1,
                    slideMove:1,
                }
            }
        ]
    }); 

  });

//   Function to change url when user click item on main panel
let changeUrl = () => {
    let url = window.location.href;
    if(url.indexOf('#') !== -1){
        let urlWithoutSection = url.slice(0,url.indexOf('#'));
        history.pushState({}, null, urlWithoutSection);
    }
}

$('nav li a').on("click", function(){
    setTimeout(function(){
        changeUrl();
    },1000);
});

// Function to show up when scrool up
let prevScrollpos = window.pageYOffset;
window.onscroll = function() {
let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav").style.top = "0";
  } else {
    document.querySelector("nav").style.top = "-7rem";
  }
  prevScrollpos = currentScrollPos;
}

const isEmail = email =>  {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }

// show success message when form message is submitted

const showSuccesMessage = () =>{
    if(isEmail($('#sender-email').val()) && $('#content-email') !== ''){
        $('email-form > button').on("click", function(){
            $('.success-message').slideDown(function() {
                setTimeout(function() {
                    $('.success-message').slideUp();
                }, 5000);
            });
        });
    }

}

showSuccesMessage();


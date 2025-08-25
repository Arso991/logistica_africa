(function ($) {
  "use strict";

  // PAGE LOADING
  $(window).on("load", function (e) {
    $("#global-loader").fadeOut("slow");
  });

  // CARD
  const DIV_CARD = "div.card";

  // FUNCTIONS FOR COLLAPSED CARD
  $(document).on("click", '[data-bs-toggle="card-collapse"]', function (e) {
    let $card = $(this).closest(DIV_CARD);
    $card.toggleClass("card-collapsed");
    e.preventDefault();
    return false;
  });

  // BACK TO TOP BUTTON
  $(window).on("scroll", function (e) {
    if ($(this).scrollTop() > 2) {
      $("#whatsapp-btn").removeClass('hidden').addClass('flex');
    } else {
      $("#whatsapp-btn").addClass("hidden").removeClass('flex');
      $("#whatsapp-popup").hide(); // Ferme le popup si l'utilisateur remonte
    }
  });

  //Whatsapp popup
  $(document).ready(function () {
    const whatsappNumber = "2290148655555"; // Remplace avec ton numéro

    $("#whatsapp-btn").on("click", function () {
      $("#whatsapp-popup").fadeToggle("fast");
    });

    $("#send-whatsapp").on("click", function () {
      const message = $("#whatsapp-message").val().trim();

      let finalMessage = message !== ""
        ? message
        : "Bonjour, je souhaite avoir plus d'informations sur vos services.";

      const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(finalMessage)}`;
      window.open(url, '_blank');
    });

    // Cacher le popup si on clique en dehors
    $(document).on("click", function (e) {
      if (!$(e.target).closest('#whatsapp-popup, #whatsapp-btn').length) {
        $("#whatsapp-popup").fadeOut("fast"); // Masquer le popup
        $("#whatsapp-message").val(""); // Vider le champ message
      }
    });
  });

  //Cookies saving
  $(document).ready(function () {
    // Vérifie si le cookie a été accepté
    if (localStorage.getItem('cookiesAccepted')) {
      $('#cookie-popup').hide();
    }

    $('#accept-cookies').on('click', function () {
      localStorage.setItem('cookiesAccepted', 'true');
      $('#cookie-popup').fadeOut();
      // Ici, tu peux déclencher l'activation des cookies si besoin
    });

    $('#decline-cookies').on('click', function () {
      $('#cookie-popup').fadeOut();
      // Ici, tu peux gérer le refus (désactivation des cookies, etc)
    });
  });

  /* $(document).on("click", "#back-to-top", function (e) {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      0
    );
    return false;
  }); */

  $(".testimonial-carousel").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  $(".feature-logos").slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $(document).on("click", ".page", function () {
    if ($(".demo_changer").hasClass("active")) {
      $(".demo_changer").animate({ right: "-270px" }, function () {
        $(".demo_changer").toggleClass("active");
      });
    }
  });

  // RTL STYLE START
  $("#myonoffswitch24").on("click", function () {
    if (this.checked) {
      $("body").addClass("rtl");
      $(".slick-slider").slick("slickSetOption", "rtl", true);
      $("html[lang=en]").attr("dir", "rtl");
      $("body").removeClass("ltr");
      $("head link#style").attr("href", $(this));
      document
        .getElementById("style")
        .setAttribute(
          "href",
          "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"
        );
      var carousel = $(".owl-carousel");
      $.each(carousel, function (index, element) {
        // element == this
        var carouselData = $(element).data("owl.carousel");
        carouselData.settings.rtl = true; //don't know if both are necessary
        carouselData.options.rtl = true;
        $(element).trigger("refresh.owl.carousel");
      });
      localStorage.setItem("sashrtl", true);
      localStorage.removeItem("sashltr");
    }
  });

  // RTL STYLE END

  // LTR STYLE START
  $("#myonoffswitch23").on("click", function () {
    if (this.checked) {
      $("body").addClass("ltr");
      $(".slick-slider").slick("slickSetOption", "rtl", false);
      $("html[lang=en]").attr("dir", "ltr");
      $("body").removeClass("rtl");
      $("head link#style").attr("href", $(this));
      document
        .getElementById("style")
        .setAttribute(
          "href",
          "../assets/plugins/bootstrap/css/bootstrap.min.css"
        );
      var carousel = $(".owl-carousel");
      $.each(carousel, function (index, element) {
        // element == this
        var carouselData = $(element).data("owl.carousel");
        carouselData.settings.rtl = false; //don't know if both are necessary
        carouselData.options.rtl = false;
        $(element).trigger("refresh.owl.carousel");
      });
      localStorage.setItem("sashltr", true);
      localStorage.removeItem("sashrtl");
    }
  });
  // LTR STYLE END

  // LIGHT THEME START
  $(document).on("click", "#myonoffswitch1", function () {
    if (this.checked) {
      $("body").removeClass("dark-mode");
      $("body").addClass("light-mode");
      $("#myonoffswitch3").prop("checked", true);
      $("#myonoffswitch6").prop("checked", true);
      localStorage.removeItem("sashdarkMode");
    }
  });
  // LIGHT THEME END

  // DARK THEME START
  $(document).on("click", "#myonoffswitch2", function () {
    if (this.checked) {
      $("body").addClass("dark-mode");
      $("body").removeClass("light-mode");

      $("#myonoffswitch5").prop("checked", true);
      $("#myonoffswitch8").prop("checked", true);
      localStorage.setItem("sashdarkMode", true);
    }
  });
  // DARK THEME END


  function landingPageLocalstorage() {
    if (localStorage.getItem("sashrtl")) {
      $("body").addClass("rtl");
    }
    if (localStorage.getItem("sashdarkMode")) {
      $("body").addClass("dark-mode");
    }
  }
  landingPageLocalstorage();

  if ($("body").hasClass("rtl")) {
    $(".slick-slider").slick("slickSetOption", "rtl", true);
    $("#slide-left").removeClass("d-none");
    $("#slide-right").removeClass("d-none");
    $("html[lang=en]").attr("dir", "rtl");
    $("body").removeClass("ltr");
    $("head link#style").attr("href", $(this));
    document
      .getElementById("style")
      .setAttribute(
        "href",
        "../assets/plugins/bootstrap/css/bootstrap.rtl.min.css"
      );
    var carousel = $(".owl-carousel");
    $.each(carousel, function (index, element) {
      // element == this
      var carouselData = $(element).data("owl.carousel");
      carouselData.settings.rtl = true; //don't know if both are necessary
      carouselData.options.rtl = true;
      $(element).trigger("refresh.owl.carousel");
    });

    $("#myonoffswitch24").prop("checked", true);
  }
  if ($("body").hasClass("dark-mode")) {
    $("body").removeClass("light-mode");

    $("#myonoffswitch2").prop("checked", true);
  }

  $(document).on("click", '[data-bs-toggle="sidebar"]', function (event) {
    event.preventDefault();
    $(".app").toggleClass("sidenav-toggled");
  });

  if (window.innerWidth <= 992) {
    $("body").removeClass("sidenav-toggled");
  }

  /* MENU HAMBURGER */
  $('#openSidebar').on('click', function () {
    $('.sidebar-container').removeClass('hidden').addClass('block');
  });

  $('#closeSidebar').on('click', function () {
    $('.sidebar-container').addClass('hidden');
  });

  $('.sidebar-overlay').on('click', function () {
    $('.sidebar-container').addClass('hidden');
  });
  /* MENU HAMBURGER */

  //TOGGLE NAVBAR
  $(document).ready(function () {
    var navbar = $('#navbar');
    var menuList = $('#menu-list');
    var openSidebar = $('#openSidebar');
    var scrollTrigger = 100;

    function setLightTheme() {
      navbar.removeClass('backdrop-blur-sm').addClass('bg-[#ffffff]');
      navbar.removeClass('absolute').addClass('fixed');
      menuList.removeClass('text-[#ffffff]').addClass('text-[#333333]');
      //openSidebar.removeClass('text-[#ffffff]').addClass('text-[#333333]');
      $('.logo1').hide();
      $('.logo2').show();
    }

    function setDarkTheme() {
      navbar.removeClass('bg-[#ffffff]').addClass('backdrop-blur-sm');
      navbar.removeClass('fixed').addClass('absolute');
      menuList.removeClass('text-[#333333]').addClass('text-[#ffffff]');
      //openSidebar.removeClass('text-[#333333]').addClass('text-[#ffffff]');
      $('.logo2').hide();
      $('.logo1').show();
    }

    if (window.location.pathname !== '/') {
      // Pages internes → toujours en light theme
      setLightTheme();
      $(window).on('scroll', function () {
        navbar.toggleClass('top-0', $(window).scrollTop() > 20);
      });
    } else {
      // Page d'accueil → thème dynamique au scroll
      $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop();
        navbar.toggleClass('top-0', scrollTop > 100);

        if (scrollTop > scrollTrigger) {
          setLightTheme();
        } else {
          setDarkTheme();
        }
      });
    }
  });
  //TOGGLE NAVBAR END

  //CUSTOM SELECT
  $(document).ready(function () {
    let $selectWrapper = $('#custom-category-select');
    let $selected = $selectWrapper.find('.selected');
    let $options = $selectWrapper.find('.options');
    let $hiddenSelect = $('#category-filter');
    let $selectedText = $('#selected-category-text');

    // Affiche/masque la liste au clic
    $selected.on('click', function () {
      $options.toggle();
    });

    // Sélection d'une option
    $options.on('click', 'li', function () {
      let value = $(this).data('value');
      let text = $(this).text();

      $selectedText.text(text);
      $hiddenSelect.val(value).trigger('change');
      $options.hide();
    });

    // Fermer si clic en dehors
    $(document).on('click', function (e) {
      if (!$(e.target).closest('#custom-category-select').length) {
        $options.hide();
      }
    });

    // Charger la valeur actuelle si déjà sélectionnée (ex: retour sur page filtrée)
    let currentValue = $hiddenSelect.val();
    if (currentValue) {
      let currentText = $options.find(`li[data-value="${currentValue}"]`).text();
      $selectedText.text(currentText);
    }
  })

  /*   $(document).ready(function () {
      $(".phone-input").each(function () {
        $(this).intlTelInput({
          initialCountry: "bj",
          preferredCountries: ["bj", "fr", "us"],
          separateDialCode: true,
          utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
        });
      });
    }); */

  //BANNER CARROUSSEL
  $("#banner-carousel-web").slick({
    dots: true,
    autoplay: false,
    arrows: false,
    infinite: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    fade: true,
    cssEase: 'linear'
  });

  $("#banner-carousel-mobile").slick({
    dots: true,
    autoplay: false,
    arrows: false,
    infinite: true,
    autoplaySpeed: 2000,
    pauseOnHover: false,
    fade: false,
    cssEase: 'linear'
  });

  //FEATURES MACHINES CARROUSSEL
  $("#featured-machine-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    centerMode: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('#featured-arrows .slick-prev'),
    nextArrow: $('#featured-arrows .slick-next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
    cssEase: 'linear'
  });

  //PARTNER CARROUSSEL
  $("#partner-carroussel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    centerMode: false,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    prevArrow: $('#partner-arrows .slick-prev'),
    nextArrow: $('#partner-arrows .slick-next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
    cssEase: 'linear'
  });

  //TESTIMONIAL CARROUSSEL
  $("#testimonial-caroussel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    centerMode: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    prevArrow: $('#testimonial-arrows .slick-prev'),
    nextArrow: $('#testimonial-arrows .slick-next'),
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ],
    cssEase: 'linear'
  });



  // Initialize the map
  if (window.location.pathname === "/contact") {

    let address = "Cotonou, Bénin"; // exemple : "Cotonou, Bénin"

    fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(address)}`)
      .then(response => response.json())
      .then(data => {
        if (data.length > 0) {
          let lat = data[0].lat;
          let lon = data[0].lon;

          let map = L.map('map').setView([lat, lon], 13);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
          }).addTo(map);

          L.marker([lat, lon]).addTo(map)
            .bindPopup(address)
            .openPopup();
        } else {
          alert("Adresse introuvable.");
        }
      })
      .catch(error => {
        console.error("Erreur de géocodage :", error);
      });
  }

  //Switch into recap and form
  $(document).ready(function () {
    $('#show-recap').click(function () {
      $('#recap-section').show();
      $('#form-section').hide();

      // Update button styles
      $('#show-recap').addClass('bg-primary text-[#f2722b] border border-[#f2722b]').removeClass('bg-gray-200 text-gray-700');
      $('#show-form').addClass('bg-gray-200 text-gray-700').removeClass('bg-primary text-[#f2722b] border border-[#f2722b]');
    });

    $('#show-form').click(function () {
      $('#recap-section').hide();
      $('#form-section').show();

      // Update button styles
      $('#show-form').addClass('bg-primary text-[#f2722b] border border-[#f2722b]').removeClass('bg-gray-200 text-gray-700');
      $('#show-recap').addClass('bg-gray-200 text-gray-700').removeClass('bg-primary text-[#f2722b] border border-[#f2722b]');
    });

    $('#next-step').click(function () {
      $('#recap-section').hide();
      $('#form-section').show();

      // Update button styles
      $('#show-form').addClass('bg-primary text-[#f2722b] border border-[#f2722b]').removeClass('bg-gray-200 text-gray-700');
      $('#show-recap').addClass('bg-gray-200 text-gray-700').removeClass('bg-primary text-[#f2722b] border border-[#f2722b]');
    });
  });

  //Category filter
  $('#category-filter').on('change', function () {
    let categoryId = $(this).val();
    let params = new URLSearchParams(window.location.search);

    if (categoryId) {
      params.set('category', categoryId);
    } else {
      params.delete('category');
    }

    window.location.search = params.toString();
  });

})(jQuery);


// FOOTER
//document.getElementById("year").innerHTML = new Date().getFullYear();

window.addEventListener("scroll", reveal);

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var cardTop = reveals[i].getBoundingClientRect().top;
    var cardRevealPoint = 150;

    //   console.log('condition', windowHeight - cardRevealPoint)

    if (cardTop < windowHeight - cardRevealPoint) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

reveal();

// ==== for menu scroll
const pageLink = document.querySelectorAll(".side-menu__item");

pageLink.forEach((elem) => {
  elem.addEventListener("click", (e) => {
    e.preventDefault();
    document.querySelector(elem.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
      offsetTop: 1 - 60,
    });
  });
});

// section menu active
function onScroll(event) {
  const sections = document.querySelectorAll(".side-menu__item");
  const scrollPos =
    window.pageYOffset ||
    document.documentElement.scrollTop ||
    document.body.scrollTop;

  sections.forEach((elem) => {
    const val = elem.getAttribute("href");
    const refElement = document.querySelector(val);
    const scrollTopMinus = scrollPos + 73;
    if (
      refElement.offsetTop <= scrollTopMinus &&
      refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
    ) {
      elem.classList.add("active");
    } else {
      elem.classList.remove("active");
    }
  });
}

window.document.addEventListener("scroll", onScroll);

jQuery(".demo-icon").click(function () {
  if ($(".demo_changer").hasClass("active")) {
    $(".demo_changer").animate({ right: "-270px" }, function () {
      $(".demo_changer").toggleClass("active");
    });
  } else {
    $(".demo_changer").animate({ right: "0px" }, function () {
      $(".demo_changer").toggleClass("active");
    });
  }
});

// RESET SWITCHER TO DEFAULT
function resetData() {
  $('#myonoffswitch23').prop('checked', true);
  $('#myonoffswitch1').prop('checked', true);
  $('body').addClass('ltr');
  $('.slick-slider').slick('slickSetOption', 'rtl', false);
  $("html[lang=en]").attr("dir", "ltr");
  $('body').removeClass('rtl');
  $("head link#style").attr("href", $(this));
  (document.getElementById("style").setAttribute("href", "../assets/plugins/bootstrap/css/bootstrap.min.css"));
  var carousel = $('.owl-carousel');
  $.each(carousel, function (index, element) {
    // element == this
    var carouselData = $(element).data('owl.carousel');
    carouselData.settings.rtl = false; //don't know if both are necessary
    carouselData.options.rtl = false;
    $(element).trigger('refresh.owl.carousel');
  });
  $('body').removeClass('dark-mode');
  $('body').addClass('light-mode');
  $('#myonoffswitch3').prop('checked', true);
  $('#myonoffswitch6').prop('checked', true);
  localStorage.clear()
}

document.addEventListener("DOMContentLoaded", function () {
  const phoneInputs = document.querySelectorAll(".phone-input");

  // Stocker les instances
  const itiInstances = {};

  phoneInputs.forEach(input => {
    const iti = window.intlTelInput(input, {
      initialCountry: "bj", // Bénin 🇧🇯 par défaut
      preferredCountries: ["bj", "fr", "us"],
      separateDialCode: true,
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@21.2.6/build/js/utils.js"
    });

    itiInstances[input.id] = iti;

    // Empêcher plus de chiffres que la longueur max du pays
    input.addEventListener("input", function () {
      //const countryData = iti.getSelectedCountryData();
      //const exampleNumber = intlTelInputUtils.getExampleNumber(countryData.iso2, true, intlTelInputUtils.numberFormat.NATIONAL);
      //const maxLength = exampleNumber.replace(/\D/g, '').length; // nombre max de chiffres
      this.value = this.value.replace(/\D/g, '')
    });
  });

  // Avant envoi du formulaire, remplir tous les champs cachés
  document.querySelectorAll('form').forEach(form => {
    form.addEventListener('submit', function () {
      phoneInputs.forEach(input => {
        const iti = itiInstances[input.id];
        const fullInputId = input.id + "_full";
        const hiddenInput = document.getElementById(fullInputId);
        if (hiddenInput && iti) {
          const countryData = iti.getSelectedCountryData();
          const dialCode = "+" + countryData.dialCode; // indicatif
          const number = input.value.replace(/\D/g, ''); // numéro sans espaces ni lettres

          // Formater le numéro complet avec indicatif + numéro
          hiddenInput.value = dialCode + number;
        }
      });
    });
  });
});



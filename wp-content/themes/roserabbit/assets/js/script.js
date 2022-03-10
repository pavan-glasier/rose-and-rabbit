var clientSlider = new Swiper(".clients__slider", {
  loop: true,
  speed: 800,
  autoplay: {
    delay: 3000,
  },
  breakpoints: {
    300: {
      slidesPerView: 2,
    },
    767.98: {
      slidesPerView: 3,
    },
    991.98: {
      slidesPerView: 4,
    },
  }
});

function heightFix() {
  var biggestHeight = 0;
  // Loop through elements children to find & set the biggest height
  $(".height-fix *").each(function () {
    // If this elements height is bigger than the biggestHeight
    if ($(this).height() > biggestHeight) {
      // Set the biggestHeight to this Height
      biggestHeight = $(this).height();
    }
  });

  // Set the container height
  $(".height-fix").height(biggestHeight);
}

heightFix();

$(window).on('resize', function () {
  heightFix();
});

$(".up-button").on('click', function (e) {
  e.preventDefault();
  this.parentNode.querySelector('#counter').stepUp()
});
$(".down-button").on('click', function (e) {
  e.preventDefault();
  this.parentNode.querySelector('#counter').stepDown()
});

$('.card').on('hide.bs.collapse', function (e) {
  console.log("Hidden");
  var parentId = $(e.target).parent().attr('id');
  $(`#${parentId} > .card-header > h5`).addClass('hidden');
});

$('.card').on('show.bs.collapse', function (e) {
  console.log("Shown");
  var parentId = $(e.target).parent().attr('id');
  $(`#${parentId} > .card-header > h5`).removeClass('hidden');
});

$(window).on('load', function () {
  heightFix();
});
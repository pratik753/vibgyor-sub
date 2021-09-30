$(".post-wrapper").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  nextArrow: $(".next"),
  prevArrow: $(".prev"),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

const api = `https://gnews.io/api/v4/search?q=finance&country=in&token=2c7844cedbb5f28289214b307b51ab80`;
fetch(api)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    let articles = data.articles;
    console.log(articles);
    var i;
    var len = articles.length;

    for (i = 0; i < len; i++) {
      // $(".post-wrapper").slick(
      //   "slickAdd",
      //   "<div class='post'><div class='post-image'><img src='" +
      //     articles[i].image +
      //     "' onclick='onClick(this)' alt='post image' class='slider-image'></div><div class='post-info'><h4><a href=" +
      //     articles[i].url +
      //     ">" +
      //     articles[i].title +
      //     "</a></h4><br><div style='margin-top: -2vw;'><h6>Source:<i class='far fa-newspaper'></i> " +
      //     articles[i].source.name +
      //     "</h6><p>" +
      //     articles[i].description +
      //     "</p></div><div style='margin-top: 1vw;'><i class='far fa-calendar' style='color:#13A89E'> " +
      //     articles[i].date +
      //     "</i></div></div>"
      // );
      var date = articles[i].publishedAt.slice(0, 10);
     var  description = articles[i].description.slice(0,30);
      $(".post-wrapper").slick(
        "slickAdd",
        "<div class='post'><div class='post-image'><img src='" +
          articles[i].image +
          "' onclick='onClick(this)' alt='post image' class='slider-image'></div><div class='post-info'><h4>" +
          articles[i].title +
          "</h4><br><div style='margin-top: -2vw;'><h6>Source:<i class='far fa-newspaper'></i> " +
          articles[i].source.name +
          "</h6><p>" +
          description +
          "<span style='color:#13A89E;'><a href=" +
          articles[i].url +
          ">..readmore</a></span></p></div><div style='margin-top: 1vw;'><i class='far fa-calendar' style='color:#13A89E'> " +
          date +
          "</i></div></div>"
      );
    }
  });

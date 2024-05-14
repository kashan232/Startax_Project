$(function () {
  $(".menu-link").click(function () {
    $(".menu-link").removeClass("is-active");
    $(this).addClass("is-active");
  });
});

$(function () {
  $(".main-header-link").click(function () {
    $(".main-header-link").removeClass("is-active");
    $(this).addClass("is-active");
  });
});

const dropdowns = document.querySelectorAll(".dropdown");
dropdowns.forEach((dropdown) => {
  dropdown.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdowns.forEach((c) => c.classList.remove("is-active"));
    dropdown.classList.add("is-active");
  });
});

$(".search-bar input")
  .focus(function () {
    $(".header").addClass("wide");
  })
  .blur(function () {
    $(".header").removeClass("wide");
  });

$(document).click(function (e) {
  var container = $(".status-button");
  var dd = $(".dropdown");
  if (!container.is(e.target) && container.has(e.target).length === 0) {
    dd.removeClass("is-active");
  }
});

$(function () {
  $(".dropdown").on("click", function (e) {
    $(".content-wrapper").addClass("overlay");
    e.stopPropagation();
  });
  $(document).on("click", function (e) {
    if ($(e.target).is(".dropdown") === false) {
      $(".content-wrapper").removeClass("overlay");
    }
  });
});

$(function () {
  $(".status-button:not(.open)").on("click", function (e) {
    $(".overlay-app").addClass("is-active");
  });
  $(".pop-up .close").click(function () {
    $(".overlay-app").removeClass("is-active");
  });
});

$(".status-button:not(.open)").click(function () {
  $(".pop-up").addClass("visible");
});

$(".pop-up .close").click(function () {
  $(".pop-up").removeClass("visible");
});

const toggleButton = document.querySelector(".dark-light");

toggleButton.addEventListener("click", () => {
  document.body.classList.toggle("light-mode");
});

{
  const tabsNav = document.querySelectorAll(".process-tab-btns ul li");
  const tabsContent = document.querySelectorAll(
    ".process-tabs-cntnt .p-tab-cntnt"
  );

  tabsNav.forEach((items, ind) => {
    items.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("active");
      });

      items.classList.add("active");

      tabsContent.forEach((content) => {
        content.classList.remove("active");
      });

      tabsContent[ind].classList.add("active");
    });
  });
}

{
  const tabsNav = document.querySelectorAll(".inerr_taabs-tab-btns ul li");
  const tabsContent = document.querySelectorAll(
    ".inerr_taabs_content .inerr-tab-cntnt"
  );

  tabsNav.forEach((items, ind) => {
    items.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("active");
      });

      items.classList.add("active");

      tabsContent.forEach((content) => {
        content.classList.remove("active");
      });

      tabsContent[ind].classList.add("active");
    });
  });
}

{
  $(document).ready(function () {
    $("#userTable").DataTable();
  });
}
{
  var rows = document.getElementsByClassName("hrefData");
  for (var i = 0; i < rows.length; i++) {
    rows[i].addEventListener("click", function () {
      window.location.href = "Customer.html";
    });
  }
}

{
  document.querySelectorAll(".menu_icon").forEach(function (element) {
    element.addEventListener("click", function () {
      var filter_data = document.querySelectorAll(".left-side");
      filter_data.forEach(function (element) {
        element.classList.toggle("ActiveMenu");
      });
    });
  });
}

{
  var toggleButtons = document.getElementsByClassName("button_show");
  var dataElements = document.getElementsByClassName("data_show");

  for (var i = 0; i < toggleButtons.length; i++) {
    toggleButtons[i].addEventListener("click", function () {
      var dataIndex = Array.prototype.indexOf.call(toggleButtons, this);
      if (dataIndex !== -1 && dataIndex < dataElements.length) {
        if (dataElements[dataIndex].classList.contains("show")) {
          dataElements[dataIndex].classList.remove("show");
        } else {
          for (var j = 0; j < dataElements.length; j++) {
            dataElements[j].classList.remove("show");
          }
          dataElements[dataIndex].classList.add("show");
        }
      }
    });
  }
}

{
  var toggleButtonstwo = document.getElementsByClassName("click_mod");
  var dataElementstwo = document.getElementsByClassName("button_show");

  for (var i = 0; i < toggleButtonstwo.length; i++) {
    toggleButtonstwo[i].addEventListener("click", function () {
      // Remove "hide" class from all button_show elements
      for (var j = 0; j < dataElementstwo.length; j++) {
        dataElementstwo[j].classList.remove("hide");
      }

      // Find the corresponding button_show element
      var dataIndex = Array.prototype.indexOf.call(toggleButtonstwo, this);
      if (dataIndex !== -1 && dataIndex < dataElementstwo.length) {
        // Toggle the "hide" class for the clicked element
        dataElementstwo[dataIndex].classList.toggle("hide");
      }
    });
  }
}

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
  document.querySelectorAll(".profile-img").forEach(function (element) {
    element.addEventListener("click", function () {
      var filter_data = document.querySelectorAll(".profile_click");
      filter_data.forEach(function (element) {
        element.classList.toggle("Activeprofile");
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
      for (var j = 0; j < dataElementstwo.length; j++) {
        dataElementstwo[j].classList.remove("hide");
      }
      var dataIndex = Array.prototype.indexOf.call(toggleButtonstwo, this);
      if (dataIndex !== -1 && dataIndex < dataElementstwo.length) {
        dataElementstwo[dataIndex].classList.toggle("hide");
      }
    });
  }
}

{
  const tabsNav = document.querySelectorAll(".inner_click");
  const tabsContent = document.querySelectorAll(".module_data.Show_mod_iner");
  const backBtn = document.querySelectorAll(".backBtn");

  function removeActiveClass() {
    tabsNav.forEach((item) => {
      item.classList.remove("active");
    });

    tabsContent.forEach((content) => {
      content.classList.remove("active");
    });
  }

  tabsNav.forEach((item, index) => {
    item.addEventListener("click", () => {
      removeActiveClass();

      item.classList.add("active");
      tabsContent[index].classList.add("active");
    });
  });

  backBtn.forEach((btn) => {
    btn.addEventListener("click", () => {
      removeActiveClass();
    });
  });
}

{
  document.addEventListener("DOMContentLoaded", function () {
    const accordionItems = document.querySelectorAll(".accordion-item");
    // if (accordionItems.length > 0) {
    //   accordionItems[0].classList.add("open");
    // }
    accordionItems.forEach((item) => {
      const header = item.querySelector(".accordion-item-header");
      header.addEventListener("click", () => {
        document.querySelectorAll(".accordion-item").forEach((otherItem) => {
          if (otherItem !== item && otherItem.classList.contains("open")) {
            otherItem.classList.remove("open");
          }
        });
        item.classList.toggle("open");
      });
    });
  });
}

{
  document.querySelectorAll(".employerTypeSelect").forEach((select) => {
    select.addEventListener("change", function () {
      const selectedOption = this.options[this.selectedIndex];

      if (selectedOption.value) {
        const formGrid = this.closest(".form_input_grp.slec");
        const dynamicInputGrp = document.createElement("div");
        dynamicInputGrp.classList.add("form_input_grp", "dynamic-input");

        const dynamicLabel = document.createElement("label");
        dynamicLabel.textContent = `Additional Information for ${selectedOption.text}`;

        const dynamicInput = document.createElement("input");
        dynamicInput.type = "text";

        dynamicInputGrp.appendChild(dynamicLabel);
        dynamicInputGrp.appendChild(dynamicInput);

        // Insert the dynamic input group after the first child
        if (formGrid.firstChild && formGrid.firstChild.nextSibling) {
          formGrid.insertBefore(
            dynamicInputGrp,
            formGrid.firstChild.nextSibling
          );
        } else {
          formGrid.appendChild(dynamicInputGrp);
        }
      }
    });
  });
}
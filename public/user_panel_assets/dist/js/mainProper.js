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
  const tabsContent = document.querySelectorAll(".inerr-tab-cntnt");

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
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".ic_bus_main").forEach(function (element) {
      element.addEventListener("click", function () {
        var mainRow = element
          .closest(".inerr-tab-cntnt")
          .querySelector(".main_row");
        var topUpHide = element
          .closest(".inerr-tab-cntnt")
          .querySelector(".top_up_hide");

        if (mainRow.style.display === "block") {
          mainRow.style.display = "none";
          topUpHide.style.display = "block";
        } else {
          mainRow.style.display = "block";
          topUpHide.style.display = "none";
        }
      });
    });
  });
}
{
  const backButton = document.querySelectorAll(".Back_button");
  const tabsNav = document.querySelectorAll(".inr_tabs_button .buton_tabs_ac");
  const tabsContent = document.querySelectorAll(".rows_data");

  backButton.forEach((hide) => {
    hide.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("Tabs_active");
      });
      tabsContent.forEach((content) => {
        content.classList.remove("Tabs_active_data");
      });
      backButton.forEach((button) => {
        button.removeEventListener("click", removeActiveClasses);
      });
    });
  });

  tabsNav.forEach((items, ind) => {
    items.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("Tabs_active");
      });

      items.classList.add("Tabs_active");

      tabsContent.forEach((content) => {
        content.classList.remove("Tabs_active_data");
      });
      tabsContent[ind].classList.add("Tabs_active_data");
    });
  });

  function removeActiveClasses() {
    tabsNav.forEach((remove) => {
      remove.classList.remove("Tabs_active");
    });

    tabsContent.forEach((content) => {
      content.classList.remove("Tabs_active_data");
    });
  }

  backButton.forEach((hide) => {
    hide.addEventListener("click", () => {
      removeActiveClasses();
      backButton.forEach((button) => {
        button.removeEventListener("click", removeActiveClasses);
      });
    });
  });
  tabsNav.forEach((items, ind) => {
    items.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("Tabs_active");
      });

      items.classList.add("Tabs_active");

      tabsContent.forEach((content) => {
        content.classList.remove("Tabs_active_data");
      });
      tabsContent[ind].classList.add("Tabs_active_data");
    });
  });
}

{
  document.addEventListener("DOMContentLoaded", () => {
    const tabsNav = document.querySelectorAll(".deducTion_button");
    const tabsContent = document.querySelectorAll(".deducTion_form");
    const backButton = document.querySelector(".Back_button_deduc");

    tabsNav.forEach((items, ind) => {
      items.addEventListener("click", () => {
        tabsNav.forEach((remove) => {
          remove.classList.remove("deducTion_button_active");
        });

        items.classList.add("deducTion_button_active");

        tabsContent.forEach((content) => {
          content.classList.remove("deducTion_form_active");
        });

        tabsContent[ind].classList.add("deducTion_form_active");
      });
    });

    backButton.addEventListener("click", () => {
      tabsNav.forEach((remove) => {
        remove.classList.remove("deducTion_button_active");
      });

      tabsContent.forEach((content) => {
        content.classList.remove("deducTion_form_active");
      });
    });
  });
}

{
  const tabsNav = document.querySelectorAll(".tds-tsx-button");
  const tabsContent = document.querySelectorAll(".TDS-Taxes-form");
  const backButtons = document.querySelectorAll(".Back_button_tds");
  function resetTabs() {
    tabsNav.forEach((remove) => {
      remove.classList.remove("tds-tsx-button_active");
    });

    tabsContent.forEach((content) => {
      content.classList.remove("TDS-Taxes-form_active");
    });
  }
  tabsNav.forEach((items, ind) => {
    items.addEventListener("click", () => {
      resetTabs();
      items.classList.add("tds-tsx-button_active");
      tabsContent[ind].classList.add("TDS-Taxes-form_active");
    });
  });

  backButtons.forEach((backButton) => {
    backButton.addEventListener("click", resetTabs);
  });
}
{
  const div_throw = document.querySelectorAll(".div_throw");

  document.querySelectorAll(".icon_throw").forEach((icon, index) => {
    icon.addEventListener("click", () => {
      div_throw.forEach((element, i) => {
        if (i !== index) {
          element.classList.remove("Active");
        }
      });
      div_throw[index].classList.toggle("Active");
    });
  });
}

{
  document.querySelectorAll(".inner_div_drk").forEach((element) => {
    element.addEventListener("click", () => {
      var inner_div_drk = document.querySelectorAll(".body");
      var inner_div_dr2 = document.querySelectorAll(".main-header");

      inner_div_drk.forEach((bodyElement) => {
        bodyElement.classList.toggle("dark-mode");
      });

      inner_div_dr2.forEach((headerElement) => {
        headerElement.classList.toggle("navbar-dark");
      });
    });
  });
}

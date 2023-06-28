document.addEventListener("DOMContentLoaded", function () {
  var menuItems = Array.prototype.filter.call(
    document.querySelectorAll("#ast-hf-menu-1 a[href^='#'], #ast-hf-menu-1 a[href='/']"),
    function (item) {
      return item.getAttribute("href") !== "#";
    }
  );
  
  var sections = Array.prototype.map.call(menuItems, function (item) {
    return item.getAttribute("href") === '/'
      ? 'homepage'
      : document.querySelector(item.getAttribute("href"));
  }).filter(function (section) {
    return section !== null;
  });

  function scrollToElementWithOffset(element, offset) {
    var y = element.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }

  menuItems.forEach(function (item) {
    item.addEventListener("click", function (event) {
      event.preventDefault();
      var target = item.getAttribute("href") === '/' ? document.querySelector("body") : document.querySelector(item.getAttribute("href"));
      scrollToElementWithOffset(target, 110); // 110px offset
    });
  });

  function updateActiveMenuItem() {
    var currentIndex = -1;
    var headerHeight = 400;

    for (var i = 0; i < sections.length; i++) {
      if (sections[i] === 'homepage') {
        continue;
      }

      var section = sections[i];
      var sectionRect = section.getBoundingClientRect();

      if (sectionRect.top <= headerHeight && sectionRect.bottom > headerHeight) {
        currentIndex = i;
        break;
      }
    }

    var homeMenuItem = document.querySelector('#menu-item-146');

    menuItems.forEach(function (item, index) {
      var listItem = item.closest("li");
      if (index === currentIndex) {
        listItem.classList.add("current-menu-ancestor");
        homeMenuItem.classList.remove("current-menu-item");
      } else {
        listItem.classList.remove("current-menu-ancestor");
        if (currentIndex === -1 && item.getAttribute("href") === '/') {
          homeMenuItem.classList.add("current-menu-ancestor");
        }
      }
    });
  }

  window.addEventListener("scroll", updateActiveMenuItem);
  updateActiveMenuItem();
});

document.addEventListener("DOMContentLoaded", function () {
  var buttons = Array.prototype.slice.call(
    document.querySelectorAll("a[href^='#'] button"),
  ).map(function (button) {
    return button.parentElement;
  }).filter(function (buttonLink) {
    return buttonLink.getAttribute("href") !== "#";
  });

  function scrollToElementWithOffset(element, offset) {
    var y = element.getBoundingClientRect().top + window.pageYOffset - offset;
    window.scrollTo({ top: y, behavior: 'smooth' });
  }

  buttons.forEach(function (button) {
    button.addEventListener("click", function (event) {
      event.preventDefault();
      var href = button.getAttribute("href");
      var target = href === '/' ? document.querySelector("body") : document.querySelector(href);
      if(target) {
        scrollToElementWithOffset(target, 110);
      } else {
        console.warn("Nepodařilo se najít cílový element pro href:", href);
      }
    });
  });
});
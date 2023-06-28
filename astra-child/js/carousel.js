document.addEventListener("DOMContentLoaded", function () {
  const carousel = document.getElementById("carousel");
  const prevButton = document.getElementById("prev");
  const nextButton = document.getElementById("next");
  const itemsToShow = 4;
//data
  const items = [
    {
      title: "Kompletní <br> automatizace",
      text: "Automatizace všech procesů, které jsou spojeny se správou vaší emise dluhopisů. ",
      image: "/wp-content/uploads/2023/04/c1.png"
    },
    {
      title: "Chytrá <br> evidence",
      text: "James za vás vede veškerou evidenci spojenou s investory. Bezpečně a přehledně ukládá dokumenty ke každé emisi.",
      image: "/wp-content/uploads/2023/04/c2.png"
    },
    {
      title: "Statistiky <br> výkonnosti",
      text: "Přehledné statistiky k jednotlivým emisím. Chytrý dashboard, který vás upozorňuje na akce.",
      image: "/wp-content/uploads/2023/04/c3.png"
    },
 {
      title: "Nejmodernější <br> zabezpečení",
      text: "Používáme nejmodernější technologie, abychom ochránili vaše data a data vašich investorů.",
      image: "/wp-content/uploads/2023/04/c4.png"
    },
	      {
      title: "Vlastní branding <br> v komunikaci",
      text: "Do komunikace s investory a do všech dokumentů si můžete vložit vlastní logo, texty a grafiku.",
      image: "/wp-content/uploads/2023/04/c5.png"
    },
	      {
      title: "Jednoduchý <br> online prodej",
      text: "Kompletně vyřeší celou online objednávku. V pár minutách provede investora všemi kroky. Vy pouze odešlete dluhopis.",
      image: "/wp-content/uploads/2023/04/c6.png"
    },
	  	      {
      title: "Přehledný <br> dashboard",
      text: 'Chytrý dashboard, který za vás hlídá všechny objednávky. <br> <span style="color:#F7F1FF">.</span>',
      image: "/wp-content/uploads/2023/04/c7.png"
    },

  ];

  function createItem(content) {
    const item = document.createElement("div");
    item.classList.add("carousel-item");
      
	const image = document.createElement("img");
    image.src = content.image;
	image.classList.add("image-wrapper");  
    item.appendChild(image);  
	  
    const title = document.createElement("h2");
    title.innerHTML = content.title;
    item.appendChild(title);
    
    const text = document.createElement("p");
    text.innerHTML = content.text;
    item.appendChild(text);

    
    return item;
  }

  function initCarousel() {
    for (let i = 0; i < itemsToShow; i++) {
      carousel.appendChild(createItem(items[i]));
    }
  }

  function slide(direction) {
    const firstItem = carousel.firstElementChild;
    const lastItem = carousel.lastElementChild;
    const firstIndex = items.findIndex((item) => item.title === firstItem.querySelector("h2").innerHTML);
    const lastIndex = items.findIndex((item) => item.title === lastItem.querySelector("h2").innerHTML);

    if (direction === "next") {
      const nextIndex = (lastIndex + 1) % items.length;
      carousel.appendChild(createItem(items[nextIndex]));
      firstItem.remove();
    } else if (direction === "prev") {
      const prevIndex = (firstIndex - 1 + items.length) % items.length;
      carousel.insertBefore(createItem(items[prevIndex]), firstItem);
      lastItem.remove();
    }
  }

  prevButton.addEventListener("click", () => slide("prev"));
  nextButton.addEventListener("click", () => slide("next"));

  initCarousel();
});
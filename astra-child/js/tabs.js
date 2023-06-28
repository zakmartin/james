    document.addEventListener('DOMContentLoaded', function() {
      const tabs = document.querySelectorAll('.tab');
      const tabImages = document.querySelectorAll('.tab-img');

      function hideAll() {
        tabImages.forEach(img => img.style.display = 'none');
        tabs.forEach(tab => {
          tab.querySelector('.tab-text').style.display = 'none';
          tab.classList.remove('tab-active');
        });
      }

      function showTab(tabNumber) {
        const tab = document.querySelector(`.tab[data-tab="${tabNumber}"]`);
        const tabImage = document.querySelector(`.tab-img[data-tab="${tabNumber}"]`);

        if (tab && tabImage) {
          hideAll();
          tab.querySelector('.tab-text').style.display = 'block';
          tabImage.style.display = 'block';
          tab.classList.add('tab-active');
        }
      }

      tabs.forEach(tab => {
        tab.addEventListener('click', function() {
          const tabNumber = this.getAttribute('data-tab');
          showTab(tabNumber);
        });
      });

      // Zobrazit první položku jako výchozí
      showTab('1');
    });

/* 
document.addEventListener('DOMContentLoaded', function() {
  const tabs = document.querySelectorAll('.tab');
  const tabImages = document.querySelectorAll('.tab-img');
  const select = document.getElementById('tab-select');
  const mobileContent = document.getElementById('mobile-content');
  const mobileTabText = mobileContent.querySelector('.tab-text');
  const mobileTabImg = mobileContent.querySelector('.tab-img');

  function hideAll() {
    tabImages.forEach(img => img.style.display = 'none');
    tabs.forEach(tab => {
      tab.querySelector('.tab-text').style.display = 'none';
      tab.classList.remove('tab-active');
    });
  }

  function showTab(tabNumber) {
    const tab = document.querySelector(`.tab[data-tab="${tabNumber}"]`);
    const tabImage = document.querySelector(`.tab-img[data-tab="${tabNumber}"]`);

    if (tab && tabImage) {
      hideAll();
      tab.querySelector('.tab-text').style.display = 'block';
      tabImage.style.display = 'block';
      tab.classList.add('tab-active');
    }
  }

  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      const tabNumber = this.getAttribute('data-tab');
      showTab(tabNumber);
    });
  });

  // Zobrazit první položku jako výchozí
  showTab('1');

  function createMobileSelect() {
    tabs.forEach(tab => {
      const option = document.createElement('option');
      option.value = tab.dataset.tab;
      option.textContent = tab.querySelector('h3').textContent;
      select.appendChild(option);
    });
  }

  function updateMobileContent() {
    const activeTab = document.querySelector('.tab-active');
    if (activeTab) {
      select.value = activeTab.dataset.tab;
      mobileTabText.textContent = activeTab.querySelector('.tab-text').textContent;
      const activeImg = document.querySelector(`.tab-img[data-tab="${activeTab.dataset.tab}"] img`);
      mobileTabImg.innerHTML = '';
      mobileTabImg.appendChild(activeImg.cloneNode());
    }
  }

  function handleMobileSelectChange() {
    const selectedTab = document.querySelector(`.tab[data-tab="${select.value}"]`);
    if (selectedTab) {
      // Odstraňte třídu 'tab-active' ze všech tabů
      tabs.forEach(tab => {
        tab.classList.remove('tab-active');
      });

      // Přidejte třídu 'tab-active' k vybranému tabu
      selectedTab.classList.add('tab-active');

      // Aktualizujte obsah mobilní verze
      updateMobileContent();
    }
  }

  // Přidáno pro mobilní verzi
  if (window.innerWidth <= 767) {
    createMobileSelect();
    updateMobileContent();
    select.addEventListener('change', handleMobileSelectChange);
  }
});*/
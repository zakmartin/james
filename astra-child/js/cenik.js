document.querySelectorAll('.pricing-wrapper .toggle-button').forEach((toggleButton) => {
  const wrapper = toggleButton.closest('.pricing-wrapper');
  const itemList = wrapper.previousElementSibling;
  const closeButton = wrapper.querySelector('.close-button');
  const defaultState = wrapper.querySelector('.default-state');
  const expandedState = wrapper.querySelector('.expanded-state');
  const defaultToggleIcon = defaultState.querySelector('.toggle-icon');
  const closeToggleIcon = expandedState.querySelector('.toggle-icon');

  toggleButton.addEventListener('click', () => {
    itemList.style.maxHeight = itemList.scrollHeight + "80px";
    defaultState.style.display = 'none';
    expandedState.style.display = 'block';
    defaultToggleIcon.classList.toggle('expanded');
    closeToggleIcon.classList.toggle('expanded');
  });

  closeButton.addEventListener('click', () => {
    itemList.style.maxHeight = '255px';
    defaultState.style.display = 'flex';
    expandedState.style.display = 'none';
    defaultToggleIcon.classList.toggle('expanded');
    closeToggleIcon.classList.toggle('expanded');
  });
});

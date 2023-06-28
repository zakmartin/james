function toggleFaq(index) {
  const content = document.getElementById(`content-${index}`);
  const icon = document.getElementById(`icon-${index}`);

  content.style.display = content.style.display === 'block' ? 'none' : 'block';
  icon.src = content.style.display === 'block' ? '/wp-content/themes/astra-child/img/icon-minus.svg' : '/wp-content/themes/astra-child/img/icon-plus.svg';
}		

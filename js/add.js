const contentTextList = document.querySelectorAll('.contentText');
const minFontSize = 16;
const maxFontSize =68;

contentTextList.forEach(contentText => {
  const containerWidth = contentText.clientWidth;
  const textLength = contentText.textContent.length;
  const fontSize = Math.floor(containerWidth / textLength);

  // フォントサイズを制限する
  contentText.style.fontSize = `${Math.max(minFontSize, Math.min(maxFontSize, fontSize * 1.5))}px`;
});

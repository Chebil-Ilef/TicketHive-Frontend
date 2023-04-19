

const catalogueText = document.querySelectorAll("lecture");
const letters = catalogueText.textContent.split('');

catalogueText.textContent = '';

function animateLetters() {
  letters.forEach((letter, index) => {
    const span = document.createElement('span');
    span.textContent = letter;
    span.style.animationDelay = `${0.1 * index}s`;
    catalogueText.append(span);
  });

  setTimeout(() => {
    const spans = catalogueText.querySelectorAll('span');

    spans.forEach((span) => {
      span.remove();
    });

    animateLetters();
  }, 5000);
}

animateLetters();
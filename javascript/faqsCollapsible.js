function faqsCollapsiFunc(card) {
    const content = card.querySelector('.faq-content');
    const caret = card.querySelector('.fa-caret-down');
  
    content.classList.toggle('active');
    caret.classList.toggle('active');
  }
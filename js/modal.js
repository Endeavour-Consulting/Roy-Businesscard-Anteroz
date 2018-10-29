function openModal(modalId) {
  const wrap = document.querySelector('#wrap');
  const modal = document.querySelector(`#${modalId}`);
  const iframe = document.querySelector(`#${modalId} iframe`);

  if (iframe) {

    const dataSrc = iframe.getAttribute('data-src');

    if (dataSrc != null && dataSrc != '') {
      iframe.setAttribute('src', dataSrc);
    }
  }

  wrap.classList.add('move-out');
  modal.classList.add('opened');
}

function closeModal(modalId) {
  const wrap = document.querySelector('#wrap');
  const modal = document.querySelector(`#${modalId}`);

  wrap.classList.remove('move-out');
  modal.classList.remove('opened');
}

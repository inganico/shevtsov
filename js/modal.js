
//добавляем переменные

const buttons = document.querySelectorAll('.success__btn');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal__close');

//перебираем кнопки на открытие модального окна

buttons.forEach((item) => {
  item.addEventListener('click',() => {
    modal.classList.add('open')
  })
})

//удаляем класс 

modalClose.addEventListener('click', () => {
  modal.classList.remove('open')
})


//делаем обработчик на клавиатуру для закрытия модального окна

window.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') {
    modal.classList.remove('open')
  }
})


//настраиваем закрытия по щелчку мышки в не модального окна для его закрытия

document.querySelector('.modal .modal__box').addEventListener('click', (e) => {
  e._isClickWithInModal = true;
})

document.querySelector('.modal').addEventListener('click', (e) => {
  if (e._isClickWithInModal) return;
  e.currentTarget.classList.remove('open')
})



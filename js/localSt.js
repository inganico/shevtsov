// Функция для сохранения данных в LocalStorage
function saveDataToLocalStorage(username, email) {
  const data = {
      username: username,
      phone: email
  };
  localStorage.setItem('formData', JSON.stringify(data));
}

// Функция для загрузки данных из LocalStorage
function loadFormDataFromLocalStorage() {
  const storedData = localStorage.getItem('formData');
  if (storedData) {
      const parsedData = JSON.parse(storedData);
      document.getElementById('username').value = parsedData.username;
      document.getElementById('phone').value = parsedData.phone;
  }
}

// Обработчик события отправки формы
document.getElementById('form').addEventListener('submit', function (event) {

  const username = document.getElementById('username').value;
  const phone = document.getElementById('phone').value;

  saveDataToLocalStorage(username, phone);
});

// Загрузить данные из LocalStorage при загрузке страницы
window.addEventListener('load', function () {
  loadFormDataFromLocalStorage();
});

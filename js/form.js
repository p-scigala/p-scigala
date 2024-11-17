// variables

const form = document.querySelector('#form'),
  email = document.querySelector('#email'),
  name = document.querySelector('#name'),
  message = document.querySelector('#message'),
  submit = document.querySelector('#submit'),
  contact = document.querySelector('#contact');

function sendRequest() {
  let xhr = new XMLHttpRequest();
  xhr.open('POST', 'send-message.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onload = function () {
    if (xhr.status == 200) {
      resolve(xhr.response);
    } else {
      reject(Error(xhr.statusText));
    }
  };
  xhr.onerror = function () {
    reject(Error('Network Error'));
  };

  xhr.send(`name=${name.value}&email=${email.value}&message=${message.value}`);
}

function resolve(res) {
  const data = JSON.parse(res);
  if (data.success) {
    name.value = '';
    email.value = '';
    message.value = '';
    displayAlert('success', language.sentFailure[lang]);
  }
}

function reject(res) {
  const data = JSON.parse(res);
  displayAlert('error', language.sent[lang]);
  console.log('Błąd przesyłania wiadomości: ', data);
}

function displayAlert(type, content) {
  const info = document.createElement('div');
  info.id = 'mail-info';
  info.innerHTML = content;
  info.classList.add(type);
  document.body.append(info);

  setTimeout(() => info.classList.add('active'), 50);
  setTimeout(() => info.classList.remove('active'), 10000);
}

submit.addEventListener('click', (e) => {
  e.preventDefault();
  if (validate()) sendRequest();
});

form.querySelectorAll('.form-error__alert').forEach((item) => item.remove());
form.querySelectorAll('input, textarea').forEach((item) => {
  item.addEventListener('change', () => removeAlert(item));
  item.addEventListener('keydown', () => removeAlert(item));
});

function removeAlert(item) {
  item.classList.remove('form-error');
  if (item.nextElementSibling.classList.contains('form-error__alert'))
    item.nextElementSibling.remove();
}

function validate() {
  form.querySelectorAll('input, textarea').forEach((item) => removeAlert(item));

  const emailPattern = email.value
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
  let valid = true;

  if (name.value === '') {
    name.classList.add('form-error');
    generateError(name, 'empty');
    valid = false;
  }

  if (email.value === '' || !emailPattern) {
    email.classList.add('form-error');
    if (email.value === '') generateError(email, 'empty');
    else generateError(email, 'email');
    valid = false;
  }

  if (message.value === '') {
    message.classList.add('form-error');
    generateError(message, 'empty');
    valid = false;
  }

  function generateError(field, type) {
    const error = document.createElement('div');
    error.classList.add('form-error__alert');

    let msg = language.formErrorUnknown[lang];
    if (type === 'empty') msg = language.formErrorEmpty[lang];
    else if (type === 'email') msg = language.formErrorEmail[lang];

    const errorName = capitalizeFirstLetter(type);

    error.setAttribute('data-text', `formError${errorName}`);
    error.innerText = msg;
    error.classList.add('hidden');
    field.after(error);
    setTimeout(() => error.classList.remove('hidden'), 0);
  }

  return valid;
}

function capitalizeFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

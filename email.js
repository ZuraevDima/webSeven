const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
  host: 'host',
  port: port,
  auth: {
    user: 'zuraev.dima@yandex.ru', // Ваш адрес электронной почты
    pass: 'fake_pas' // Ваш пароль от почты
  }
});

// Настройте параметры письма
const mailOptions = {
  from: 'zuraev.dima@yandex.ru',
  to: 'zuraevd@yandex.ru', // Адрес получателя
  subject: 'Тема вашего письма',
  text: 'Текст вашего письма'
};

// Отправьте письмо
transporter.sendMail(mailOptions, (error, info) => {
  if (error) {
    console.error('Ошибка отправки письма:', error);
  } else {
    console.log('Письмо успешно отправлено:', info.response);
  }
});
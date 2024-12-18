const express = require('express');
const QRCode = require('qrcode');

const app = express();

app.get('/generate', async (req, res) => {
  const url = req.query.url;

  if (!url) {
    return res.status(400).send('URL не указан.');
  }

  try {
    const qr = await QRCode.toDataURL(url);
    res.send(`<img src="${qr}" />`);
  } catch (err) {
    res.status(500).send('Ошибка при создании QR-кода.');
  }
});
app.get('/', async (req, res) => {
    res.send("Создание QR-кода. Пример:/generate?url=https://instagram.com/d_zur1")
  });

app.listen(3000, () => {
  console.log(`Сервер запущен на порту 3000`);
});
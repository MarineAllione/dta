const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/html');
  res.end('<html><body>Hello la Design Tech Acad&eacute;mie !</body></html>');
});

server.listen(port, hostname, () => {
  console.log(`Le serveur écoute à l'URL http://${hostname}:${port}/`);
});
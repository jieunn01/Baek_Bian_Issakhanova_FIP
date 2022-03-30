const fs = require('fs');

module.exports = {
  lintOnSave: false,
  devServer: {
    https: {
      key: fs.readFileSync('./cert/cert.key'),
      cert: fs.readFileSync('./cert/cert.pem'),
    },
    public: 'https://localhost:8080/',
  },
};

const dotenv = require('dotenv');
dotenv.config()

module.exports = {
    urlDB: process.env.URL_MONGODB_DEV,
    jwtExpiration: '2h',
    jwtSecret: 'jwtSecret',
}
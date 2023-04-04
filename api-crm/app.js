const createError = require('http-errors');
const express = require('express');
const path = require('path');
const cookieParser = require('cookie-parser');
const logger = require('morgan');

const app = express();

const usersRouter = require('./app/api/v1/users/router');
const authCMSRouter = require('./app/api/v1/auth/router');
const uploadImageRouter = require('./app/api/v1/images/router');

const v1 = '/api/v1/cms';

const notFoundMiddleware = require('./app/middlewares/not-found');
const handleErrorMiddleware = require('./app/middlewares/handle-error');

// view engine setup


app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));



// catch 404 and forward to error handler
app.get('/', (req, res) => {
  res.status(200).json({
    message: 'welcome to api crm'
  })
})

app.use(v1 , usersRouter)
app.use(v1 , authCMSRouter)
app.use(v1 , uploadImageRouter)

app.use(notFoundMiddleware);
app.use(handleErrorMiddleware);

module.exports = app;

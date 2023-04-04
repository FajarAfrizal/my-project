const express = require('express')
const router = express();
const { index, create, find, update, destroy, getUserSignin, updatePasword } = require('./controller');
const {
    authenticateUser,
    authhorizeRoles,
} = require('../../../middlewares/auth')

router.get('/users', authenticateUser, authhorizeRoles('admin'), index);
router.post('/users', authenticateUser, authhorizeRoles('admin'), create);
router.get('/users/:id', authenticateUser, authhorizeRoles('admin'), find);
router.put('/users/:id', authenticateUser, authhorizeRoles('admin', 'user'), update );
router.delete('/users/:id', authenticateUser, authhorizeRoles('admin'), destroy);
router.put('/users/updatePassword/:id',authenticateUser, updatePasword);

// get user sign in

router.get('/userLogin', authenticateUser, getUserSignin )


module.exports = router;
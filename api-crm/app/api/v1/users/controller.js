const { findByIdAndUpdate } = require('./model');
const Users = require('./model');


const { getAllUsers, createUser, getOneUser, updateUser, deleteUser, updatePasswordUser } = require('../../../service/mongoose/user')

const index = async (req, res, next) => {
    try {
        const result = await getAllUsers();
        res.status(200).json({
            data: result
        })
    } catch (err) {
        next(err);
    }
}

const create = async (req, res, next) => {
    try {
        const result = await createUser(req);

        res.status(201).json({
            message: "data created successfully",
            data: result,
        });

    } catch (err) {
        next(err)
    }
}

const find = async (req, res, next) => {
    try {
        const result = await getOneUser(req)

        if (!result) {
            return res.status(404).json({
                message: 'users tidak ditemukan'
            })
        }

        res.status(200).json({
            data: result
        })

    } catch (err) {
        next(err)
    }
}

const update = async (req, res, next) => {
    try {
        const result = await updateUser(req);

        res.status(200).json({
            message: 'data berhasil di update',
            data: result
        })

    } catch (err) {
        next(err)
    }
}

const destroy = async (req, res, next) => {
    try {

        const result = await deleteUser(req);
        res.status(200).json({
            message: 'data berhasil di hapus',
            data: result
        })

    } catch (err) {
        next(err)
    }
}


const getUserSignin = async (req, res, next) => {

    const user = await Users.findOne({ email: req.user.email });

    res.status(200).json({
        data: user
    })
}


const updatePasword = async (req, res, next) => {
    try {
        const result = await updatePasswordUser(req)
        res.status(200).json({
            message: `berhasil mengubah password dari email ${req.user.email}`,
            data: result,
        })
    } catch (err) {
        next(err);
    }
    
}
module.exports = {
    index,
    create,
    find,
    update,
    destroy,
    getUserSignin,
    updatePasword
}
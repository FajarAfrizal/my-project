const Users = require('../../api/v1/users/model');
const bcrypt = require('bcryptjs');
const { BadRequestError, NotFoundError } = require('../../errors');
const { checkingImage }  = require('./images')

const getAllUsers = async (req, res, next) => {
    const result = await Users.find()

    .populate({
        path: 'image', // dari nama column di tabel user
        select: '_id name' // id dan name dari si image
    })
    .select('_id name email alamat nomer_hp tanggal_lahir jenis_kelamin image')
    return result;

}
const createUser = async (req) => {
    const {
        name,
        email,
        password,
        alamat,
        nomer_hp,
        tanggal_lahir,
        jenis_kelamin,
        image
      } = req.body;


    await checkingImage(image)
    
    const check = await Users.findOne({ email });

    if (check) throw new BadRequestError('email has been registered');

    const result = await Users.create({ name, email, password, alamat, nomer_hp, tanggal_lahir, jenis_kelamin, image })

    delete result._doc.password;

    return result;
}

const getOneUser = async (req) => {
    const { id } = req.params;
    const result = await Users.findOne({ _id: id })
    .populate({
        path: 'image', // dari nama column di tabel user
        select: '_id name' // id dan name dari si image
    })
    .select('_id name email alamat nomer_hp tanggal_lahir jenis_kelamin image')

    if (!result) throw new NotFoundError('User not found')

    return result;
}

const updateUser = async (req) => {
    const { id } = req.params;
    const {
        name,
        email,
        alamat,
        nomer_hp,
        tanggal_lahir,
        jenis_kelamin,
        image } = req.body;

        await checkingImage(image)

    const check = await Users.findOne({
        email,
        _id: { $ne: id }
    });

    if (check) throw new BadRequestError('email has been registered')

    const result = await Users.findByIdAndUpdate(
        { _id: id },
        { name, email, alamat, nomer_hp, tanggal_lahir, jenis_kelamin, image },
        { new: true, runValidators: true }
    );
    if (!result) throw new NotFoundError('User not found')

    return result;
};

const deleteUser = async (req) => {
    const { id } = req.params;

    const result = await Users.findByIdAndDelete(id);

    if (!result) throw new NotFoundError('User not found')

    return result;
}

const updatePasswordUser = async (req, res) => {
    const { id } = req.params;

    const { email, password, newPassword, confirmNewPassword } = req.body;

    if (!email || !password || !newPassword || !confirmNewPassword) throw new BadRequestError('data cannot be cleared');

    const check = await Users.findOne({ email });

    if (!check) throw new NotFoundError('Email not found');

    if (email !== req.user.email) throw new BadRequestError('Email does not match authenticated user');

    const user = await Users.findById(req.user.id);

    if (!user) throw new NotFoundError('id not found');

    const isMatch = await user.comparePassword(password);

    if (!isMatch) throw new BadRequestError('Old password not match') 

    const isSameAsOld = await user.comparePassword(newPassword);
    if (isSameAsOld) throw new BadRequestError('New password cannot be the same as the old one');

    if (newPassword !== confirmNewPassword) throw new BadRequestError('New password does not match with confirmation password');

    const hashedPassword = await bcrypt.hash(newPassword, 12);

    const result = await Users.findByIdAndUpdate({ _id: req.user.id }, { password: hashedPassword })

    return result;
}

module.exports = {
    getAllUsers,
    createUser,
    getOneUser,
    updateUser,
    deleteUser,
    updatePasswordUser,
}

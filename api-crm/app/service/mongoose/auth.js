const Users = require('../../api/v1/users/model');
const { BadRequestError, UnauthenticatedError } = require('../../errors');
const { createTokenUser, createJWT } = require('../../utils');

const signin = async (req, res, next) => {
    const { email, password } = req.body;

    if(!email || !password) {
        throw new BadRequestError('Please provide email and password');
    }

    const result = await Users.findOne({email: email})

    if (!result){
        throw new UnauthenticatedError('Invalid credentials')
    }

    const isPasswordCorrect = await result.comparePassword(password);

    if(!isPasswordCorrect) {
        throw new UnauthenticatedError('Invalid credentials');
    }

    const token  = createJWT({ payload: createTokenUser(result)});

    return token;
}

module.exports = { signin };


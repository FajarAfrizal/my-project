const { UnauthenticatedError, UnauthorizedError } = require('../errors');
const { isTokenValid } = require('../utils/jwt');


const authenticateUser = async (req, res, next) => {
    try {
        let token;
        // check header
        const authHeader = req.headers.authorization;

        if (authHeader  && authHeader.startsWith('Bearer')) {
            token = authHeader.split(' ')[1];
        }

        if (!token){
            throw new UnauthenticatedError('Authentication invalid')
        }

        const payload = isTokenValid( { token } ) 

        req.user = {
            email: payload.email,
            name: payload.name,
            role: payload.role,
            id: payload.userId,
        };

        next()
    }catch (err) {
        next(err);
    }
}

const authhorizeRoles = (...roles) => {
    return (req, res, next) => {
        if (!roles.includes(req.user.role)) {
            throw new UnauthorizedError('Unauthorized to access this route')
            
        }
        next();
    }
}

module.exports = {
    authenticateUser,
    authhorizeRoles
}
const Images =  require('../../api/v1/images/model');
const { NotFoundError } = require('../../errors');


// cara ke 1  generate url setelah submit baru kita simpan
const generateUrlImage = async (req) => {
    const result = await Images.create({
        name:`uploads/${req.file.filename}`   
    });
    return result;
}



// cara ke 2
const createImages = async (req) => {
    const result = await Images.create({
        name: req.file
        ? `uploads/${req.file.filename}`
        : 'upload/avatar/default.png'
    });
    return result;
}

const checkingImage = async (id) => {
    const result =  await Images.findOne({_id : id})
    
    if (!result) throw new  NotFoundError(`image not found for id : ${id}`);

    return result;
}

module.exports = {createImages, checkingImage};
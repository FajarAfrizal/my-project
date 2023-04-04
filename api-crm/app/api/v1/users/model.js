const mongoose = require('mongoose');
const { model, Schema } = mongoose;
const bcrypt = require('bcryptjs');

let userSchema = Schema(
    {
        name: { type: String, required: [true, 'nama harus di isi'], minLength: 3, maxLength: 50 },
        email: { type: String, required: [true, 'email harus di isi'], unique: true },
        password: { type: String, required: [true, 'password harus di isi'] },
        alamat: { type: String, required: [true, 'alamat harus di isi'] },
        nomer_hp: { type: Number, required: [true, 'nomer handphone harus di isi'], minLength: 9, maxLength: 15 },
        tanggal_lahir: { type: String, required: [true, 'tanggal harus di isi'] },
        jenis_kelamin: { type: String, required: [true, 'jenis kelamin harus di isi'], enum: ['Laki - Laki', 'Perempuan'] },
        image: { type: String },
        role: { type: String, enum: ['admin', 'user'], default: 'user' },
        image: { type: mongoose.Types.ObjectId, ref: 'images',  required: true}, // ref : images harus sama dengan model image nya
    },
    {
        timestamps: true
    }
);

// password di hash
userSchema.pre('save', async function (next) {
    const User = this;
    if (User.isModified('password')) {
        User.password = await bcrypt.hash(User.password, 12)
    }
    next()
});

userSchema.pre('findByIdAndUpdate', async function (next) {
    try {
        if (this._update.password) {
            const hashed = await bcrypt.hash(this._update.password, 12)
            this._update.password = hashed;
        }
        next();
    } catch (err) {
        return next(err);
    }
});

// cek apakah password bernar
userSchema.methods.comparePassword = async function (candidatePassword) {
    const isMatch = await bcrypt.compare(candidatePassword, this.password);
    return  isMatch; 
}

module.exports = model('Users', userSchema);
var mongoose = require('mongoose');
var Schema = mongoose.Schema;

userSchema = new Schema( {
	
	name: String,
	password: String,
	email: String,
	gender: String,
	semester: Number
}),
User = mongoose.model('User', userSchema);

module.exports = User;
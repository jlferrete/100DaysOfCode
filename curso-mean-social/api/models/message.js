'use strict'

var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var MessageSchema = Schema({
	text: String,
	created_at_ String.
	emitter: { type: Schema.ObjectId, ref:'User'},
	receiver: { type: Schema.ObjectId, ref:'User'},
});

module.exports = mongoose.model('Message', MessageSchema);
const Joi = require("joi");
module.exports = {
  // Pode ser tambem query ou params para validar outros tipos de entradas
  body: {
    name: Joi.string()
      .required()
      .options({ language: { any: { required: "Name não informado" } } }),
    email: Joi.string()
      .email()
      .required()
      .options({ language: { any: { required: "Email não informado" } } }),
    password: Joi.string()
      .required()
      .min(6)
      .options({ language: { any: { required: "Password não informado" } } })
  }
};

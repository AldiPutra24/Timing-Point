const express = require('express');
const mysql = require('mysql');
const dotenv = require('dotenv');
const app = express();
const bcrypt = require('bcryptjs');
app.use(express.urlencoded({ extended: 'false' }));
app.use(express.json());

const connection = mysql.createConnection({
  host: 'localhost',
  database: 'todolist',
  user: 'root',
  password: '',
});

// connection.connect(function (error) {
//   if (error) {
//     throw error;
//   } else {
//     console.log('MySQL Database is connected Successfully');
//   }
// });

app.post('/auth/register', (req, res) => {
  const { Name, Email, Password, DOB } = req.body;

  db.query('SELECT email FROM user WHERE email = ?', [Email], async (error, res) => {
    if (error) {
      console.log(error);
    } else {
      let hashedPassword = await bcrypt.hash(Password, 8);
      db.query('INSERT INTO user SET?', { name: Name, email: Email, password: hashedPassword }, (err, res) => {
        if (error) {
          console.log(error);
        } else {
          return res.render('register', {
            message: 'User registered!',
          });
        }
      });
    }
  });
});

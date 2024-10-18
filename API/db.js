import mysql from "mysql"

export const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password:"Wesley12345678.",
    database: "crud",
});

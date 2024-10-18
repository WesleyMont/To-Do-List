import {db} from "../db.js";

export const getLista = (_, res) => {
    const q = "SELECT * FROM lista";

    db.query(q, (err,data) => {
        if (err) return res.json(err);

        return res.status(200).json(data);
    });
};
import express from "express";
import {getLista} from "../controllers/lista.js"

const router = express.Router()

router.get("/", getLista)

export default router
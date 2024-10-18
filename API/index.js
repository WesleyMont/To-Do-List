import express from "express";
import cors from "cors";
import { ListaRoutes } from "../API/routes/lista.js";

const app = express();

app.use(express.json());
app.use(cors());
app.use("/", ListaRoutes);
app.listen(8800);